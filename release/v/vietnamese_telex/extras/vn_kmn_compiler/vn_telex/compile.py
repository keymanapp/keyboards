from timeit import default_timer as timer
import vn_telex.utils.progbar as progbar
from vn_telex.utils.TelexRule import TelexRule
import vn_telex.utils.charcases as charcases
import vn_telex.utils.vnrhymes as vnr
import vn_telex.utils.vnrhymes_old as vnro
import vn_telex.utils.uow_rules as uow

HEADER_PATH = './raw/header.kmn'
OUT_PATH = './compiled/out.kmn'


def main():
    start_time = timer()

    print('Generating Vietnamese rhymes... ', end='')
    rhymes = vnro.generate() + vnr.generate() + uow.generate()
    print(f'{len(rhymes)} generated. [DONE]')

    print('Generating uppercase and lowercase permutations... ', end='')
    rhymes_cases = []
    for i in range(len(rhymes)):
        permutation_matrix = charcases.gen_case_permutations_matrix(len(rhymes[i].base))
        for permutation_line in permutation_matrix:
            base = charcases.apply_case(rhymes[i].base, permutation_line)
            if len(rhymes[i].result) == len(permutation_line):
                result = charcases.apply_case(rhymes[i].result, permutation_line)
                rhymes_cases.append(TelexRule(base, rhymes[i].modifier.lower(), result, kmn_clogic=rhymes[i].kmn_clogic, kmn_ologic=rhymes[i].kmn_ologic))
                rhymes_cases.append(TelexRule(base, rhymes[i].modifier.upper(), result, kmn_clogic=rhymes[i].kmn_clogic, kmn_ologic=rhymes[i].kmn_ologic))
            elif len(rhymes[i].result) == len(permutation_line) + 1:
                result = charcases.apply_case(rhymes[i].result[0:-1], permutation_line) + rhymes[i].modifier.lower()
                rhymes_cases.append(TelexRule(base, rhymes[i].modifier.lower(), result, kmn_clogic=rhymes[i].kmn_clogic, kmn_ologic=rhymes[i].kmn_ologic))
                result = charcases.apply_case(rhymes[i].result[0:-1], permutation_line) + rhymes[i].modifier.upper()
                rhymes_cases.append(TelexRule(base, rhymes[i].modifier.upper(), result, kmn_clogic=rhymes[i].kmn_clogic, kmn_ologic=rhymes[i].kmn_ologic))
            progbar.print_bar(
                percentage=round(i / len(rhymes) * 100),
                message=f'({i}/{len(rhymes)}) Processing {rhymes[i].result}'
            )
    progbar.print_done(f'Generating uppercase and lowercase permutations... {len(rhymes_cases)} generated. [DONE]')

    print('Generating Keyman code... ', end='')
    content = []
    for i in range(len(rhymes_cases)):
        code = '    '
        if rhymes_cases[i].kmn_clogic:
            code += rhymes_cases[i].kmn_clogic + ' '
        code += f"'{rhymes_cases[i].base}' + '{rhymes_cases[i].modifier}' > '{rhymes_cases[i].result}'"
        if rhymes_cases[i].kmn_ologic:
            code += ' ' + rhymes_cases[i].kmn_ologic
        code += '\n'
        content.append(code)
        progbar.print_bar(
            percentage=round(i / len(rhymes_cases) * 100),
            message=f'({i}/{len(rhymes_cases)}) {code.strip()}'
        )
    progbar.print_done(f'Generating Keyman code... {len(content)} line(s) generated.')

    print(f'Saving Keyman code at {OUT_PATH} ... ', end='')
    header = []
    headerf = open(HEADER_PATH, 'r', encoding='utf-8')
    for line in headerf:
        header.append(line)
    headerf.close()
    outf = open(OUT_PATH, 'w', encoding='utf-8')
    outf.writelines(header)
    outf.writelines(content)
    outf.close()
    print(f'[DONE]\n\nTime elapsed: {round(timer() - start_time, 3)}s. ', end='')


if __name__ == '__main__':
    try:
        main()
    except KeyboardInterrupt:
        print('\nProcess interrupted.')
    finally:
        print('Process terminated.')
