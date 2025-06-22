# Delete line duplications in a text file

import sys


def print_help():
    print('Syntax: py main.py <path/to/input/file> <encoding> <path/to/output/file>')


if __name__ == '__main__':
    if len(sys.argv) == 1:
        print_help()
    else:
        encoding = 'utf-8'
        if len(sys.argv) == 4:
            encoding = sys.argv[2]

        lines = []
        file = open(sys.argv[1], 'r', encoding=encoding)
        for line in file:
            lines.append(line)
        file.close()

        lines = list(dict.fromkeys(lines))
        lines.sort()

        if len(sys.argv) <= 2:
            file = open(sys.argv[1], 'w', encoding=encoding)
        elif len(sys.argv) == 3:
            file = open(sys.argv[2], 'w', encoding=encoding)
        else:
            file = open(sys.argv[3], 'w', encoding=encoding)
        for line in lines:
            file.write(line)
        file.close()
