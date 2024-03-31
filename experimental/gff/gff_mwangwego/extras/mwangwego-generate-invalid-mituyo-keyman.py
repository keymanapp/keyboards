import os
from os import path
import pandas as pd


CURR_DIR = os.path.abspath(os.path.dirname(os.path.realpath(__file__)))

def main():
    df = pd.read_excel( CURR_DIR + "/Mituyo-Combinations.xlsx", sheet_name='Mituyo-Combo-Numbers' )

    columns = df.head()
    del columns[ 'Letter' ]
    del columns[ 'IPA' ]


    for row in df.index:
        masisi = df['Letter'][row]
        invalid = ""
        for mutuyo in columns:
            realized = df[mutuyo][row]
            if( realized != '✓' ):
                if( (type(mutuyo) == int) or (mutuyo == '-') or (mutuyo == '=') ):
                    invalid = invalid + str(mutuyo)
        print( "store(" + masisi + "_InvalidMituyo) '" + invalid + "'" )

    Mituyo = { '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '-', '=' }
    masisi_mutuyo = dict()
    for row in df.index:
        masisi = df['Letter'][row]
        invalid = ""
        for mutuyo in columns:
            mutuyo = str(mutuyo)
            if( len(mutuyo) == 2):
                realized = df[mutuyo][row]
                if( realized == '✓' ):
                    key = masisi + "_" + mutuyo[0]
                    if( key in masisi_mutuyo ):
                        masisi_mutuyo[key].add( mutuyo[1] )
                    else:
                        masisi_mutuyo[key] = { mutuyo[1] }
                    
    for key in masisi_mutuyo:
        InvalidMituyo = sorted( Mituyo - masisi_mutuyo[key] )
        invalid = "".join(map(str,InvalidMituyo))
        print( "store(" + key + "_InvalidMituyo) '" + invalid + "'" )
    
    for row in df.index:
        masisi = df['Letter'][row]
        print( "'" + masisi + "' + any(" + masisi + "_InvalidMituyo) > beep" )

    mutuyo_map = {
        '': '\uE0A9', # waya below
        '': '\uE0AB', # mura
        '': '\uE0AC', # mula
        '': '\uE0AD', # pewa
        '': '\uE0AF'  # kwanthu
    }
    for key in masisi_mutuyo:
        masisi = key.split("_")[0] # split key to get the mutuyo before "_"
        mutuyo = key.split("_")[1] # split key to get the mutuyo after "_"
        for m in mutuyo_map:
            mutuyo = mutuyo.replace( m , mutuyo_map[m] )
        print( "'" + mutuyo + "' '" + masisi + "' + any(" + key + "_InvalidMituyo) > beep" ) 

if __name__ == "__main__":
    main()
