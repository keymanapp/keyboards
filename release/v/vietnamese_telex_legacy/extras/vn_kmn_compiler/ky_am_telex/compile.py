from timeit import default_timer as timer
import vn_telex.utils.progbar as progbar


DATA_PATH = './raw/ky-am-tu-syllables.csv'
HEADER_PATH = './raw/header.kmn'
OUT_PATH = './compiled/out.kmn'


def main():
    start_time = timer()

    data = []
    print('Loading Telex - Ky Am conversion data... ', end='')
    dataf = open(DATA_PATH, 'r', encoding='utf-8')
    for line in dataf:
        split = line.strip().split(',')
        if split[0] != split[1]:
            data.append({
                'qn': split[0],
                'kat': split[1],
            })
    dataf.close()
    print(f'{len(data)} entries loaded. [DONE]')

    print('Generating Keyman code... ', end='')
    content = []
    for i in range(len(data)):
        code = f"    '{data[i]['qn']}' + ' ' > '{data[i]['kat']}'\n"
        content.append(code)
        progbar.print_bar(
            percentage=round(i / len(data) * 100),
            message=f'({i}/{len(data)}) {code[4:-1]}'
        )
        code = f"    '{data[i]['kat']}' + 'z' > '{data[i]['qn']}'\n"
        content.append(code)
        progbar.print_bar(
            percentage=round(i / len(data) * 100),
            message=f'({i}/{len(data)}) {code[4:-1]}'
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

