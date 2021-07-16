
KeymanWeb.KR(new Keyboard_naijatype());

function Keyboard_naijatype()
{
  
  this._v=(typeof keyman!="undefined"&&typeof keyman.version=="string")?parseInt(keyman.version,10):9;
  this.KI="Keyboard_naijatype";
  this.KN="Naija Type";
  this.KMINVER="9.0";
  this.KV=null;
  this.KDU=0;
  this.KH='This keyboard aims to serve all Nigerian languages, not just Hausa, Yoruba and Igbo, using the standard characters normally recommended for each script.  Please write to keyboards@m.rowbory.co.uk if you need letters that are not provided here.  On touch, press and hold for alternate characters similar to the letter you press. Q and space have several combining letters so you can type o then hold on Q to choose the underline or underdot or an accent above. On a computer with physical keyboard use the semicolon, back tick (`) and tilde (~) keys to generate variations.  Double press space bar to get a full stop followed by a space.  ';
  this.KM=0;
  this.KBVER="17";
  this.KMBM=0x0070;
  this.KVKD="T_a_underline T_e_underline T_i_underline T_o_underline T_u_underline T_a_underdot T_e_underdot T_i_underdot T_o_underdot T_u_underdot T_n_underdot T_n_underline T_h_underdot T_ucA_underline T_ucE_underline T_ucI_underline T_ucO_underline T_ucU_underline T_ucA_underdot T_ucE_underdot T_ucI_underdot T_ucO_underdot T_ucU_underdot T_ucN_underdot T_ucN_underline T_ucH_underdot T_n_bar T_ucN_bar T_q_acute T_q_grave T_q_nasal T_ucQ_acute T_ucQ_grave T_ucQ_nasal T_end_sentence";
  this.KVKL={
  "phone": {
    "font": "Andika Afr",
    "displayUnderlying": false,
    "layer": [
      {
        "id": "default",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "width": "95",
                "id": "K_Q",
                "pad": "1",
                "text": "q",
                "sk": [
                  {
                    "id": "T_q_acute",
                    "text": "q\u0301"
                  },
                  {
                    "id": "T_q_grave",
                    "text": "q\u0300"
                  },
                  {
                    "id": "T_q_nasal",
                    "text": "q\u0303"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_0301",
                    "text": "_\u0301"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_0300",
                    "text": "_\u0300"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_0302",
                    "text": "_\u0302"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_030C",
                    "text": "_\u030C"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_0303",
                    "text": "_\u0303"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_0304",
                    "text": "_\u0304"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_0331",
                    "text": "\u0331"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_0323",
                    "text": "\u0323"
                  }
                ]
              },
              {
                "width": "95",
                "id": "K_W",
                "pad": "3",
                "text": "w"
              },
              {
                "width": "95",
                "id": "K_E",
                "pad": "3",
                "text": "e",
                "sk": [
                  {
                    "id": "U_025B",
                    "text": "\u025B"
                  },
                  {
                    "id": "T_e_underline",
                    "text": "e\u0331"
                  },
                  {
                    "id": "T_e_underdot",
                    "text": "e\u0323"
                  },
                  {
                    "id": "U_00E8",
                    "text": "\u00E8"
                  },
                  {
                    "id": "U_00E9",
                    "text": "\u00E9"
                  },
                  {
                    "id": "U_00EA",
                    "text": "\u00EA"
                  },
                  {
                    "id": "U_00EB",
                    "text": "\u00EB"
                  }
                ]
              },
              {
                "width": "95",
                "id": "K_R",
                "pad": "3",
                "text": "r"
              },
              {
                "width": "95",
                "id": "K_T",
                "pad": "3",
                "text": "t",
                "sk": [
                  {
                    "id": "U_00FE",
                    "text": "\u00FE"
                  }
                ]
              },
              {
                "width": "95",
                "id": "K_Y",
                "pad": "3",
                "text": "y",
                "sk": [
                  {
                    "id": "U_01B4",
                    "text": "\u01B4"
                  },
                  {
                    "id": "U_00FD",
                    "text": "\u00FD"
                  }
                ]
              },
              {
                "width": "95",
                "id": "K_U",
                "pad": "3",
                "text": "u",
                "sk": [
                  {
                    "id": "U_028A",
                    "text": "\u028A"
                  },
                  {
                    "id": "T_u_underline",
                    "text": "u\u0331"
                  },
                  {
                    "id": "T_u_underdot",
                    "text": "u\u0323"
                  },
                  {
                    "id": "U_00F9",
                    "text": "\u00F9"
                  },
                  {
                    "id": "U_00FA",
                    "text": "\u00FA"
                  },
                  {
                    "id": "U_00FB",
                    "text": "\u00FB"
                  },
                  {
                    "id": "U_00FC",
                    "text": "\u00FC"
                  }
                ]
              },
              {
                "width": "95",
                "id": "K_I",
                "pad": "3",
                "text": "i",
                "sk": [
                  {
                    "id": "U_0268",
                    "text": "\u0268"
                  },
                  {
                    "id": "T_i_underline",
                    "text": "i\u0331"
                  },
                  {
                    "id": "T_i_underdot",
                    "text": "i\u0323"
                  },
                  {
                    "id": "U_00EC",
                    "text": "\u00EC"
                  },
                  {
                    "id": "U_00ED",
                    "text": "\u00ED"
                  },
                  {
                    "id": "U_00EE",
                    "text": "\u00EE"
                  },
                  {
                    "id": "U_00EF",
                    "text": "\u00EF"
                  }
                ]
              },
              {
                "width": "95",
                "id": "K_O",
                "pad": "3",
                "text": "o",
                "sk": [
                  {
                    "id": "U_0254",
                    "text": "\u0254"
                  },
                  {
                    "id": "T_o_underline",
                    "text": "o\u0331"
                  },
                  {
                    "id": "T_o_underdot",
                    "text": "o\u0323"
                  },
                  {
                    "id": "U_00F2",
                    "text": "\u00F2"
                  },
                  {
                    "id": "U_00F3",
                    "text": "\u00F3"
                  },
                  {
                    "id": "U_00F4",
                    "text": "\u00F4"
                  },
                  {
                    "id": "U_00F5",
                    "text": "\u00F5"
                  },
                  {
                    "id": "U_00F6",
                    "text": "\u00F6"
                  },
                  {
                    "id": "U_00F8",
                    "text": "\u00F8"
                  }
                ]
              },
              {
                "width": "95",
                "id": "K_P",
                "pad": "3",
                "text": "p"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "id": "K_A",
                "pad": "30",
                "text": "a",
                "sk": [
                  {
                    "id": "U_0259",
                    "text": "\u0259"
                  },
                  {
                    "id": "T_a_underline",
                    "text": "a\u0331"
                  },
                  {
                    "id": "T_a_underdot",
                    "text": "a\u0323"
                  },
                  {
                    "id": "U_00E0",
                    "text": "\u00E0"
                  },
                  {
                    "id": "U_00E1",
                    "text": "\u00E1"
                  },
                  {
                    "id": "U_00E2",
                    "text": "\u00E2"
                  },
                  {
                    "id": "U_00E3",
                    "text": "\u00E3"
                  }
                ]
              },
              {
                "id": "K_S",
                "pad": "3",
                "text": "s",
                "sk": [
                  {
                    "id": "U_00DF",
                    "text": "\u00DF"
                  }
                ]
              },
              {
                "id": "K_D",
                "pad": "3",
                "text": "d",
                "sk": [
                  {
                    "layer": "default",
                    "id": "U_0257",
                    "text": "\u0257"
                  }
                ]
              },
              {
                "id": "K_F",
                "pad": "3",
                "text": "f"
              },
              {
                "id": "K_G",
                "pad": "3",
                "text": "g"
              },
              {
                "id": "K_H",
                "pad": "3",
                "text": "h"
              },
              {
                "id": "K_J",
                "pad": "3",
                "text": "j"
              },
              {
                "id": "K_K",
                "pad": "3",
                "text": "k",
                "sk": [
                  {
                    "id": "U_0199",
                    "text": "\u0199"
                  }
                ]
              },
              {
                "id": "K_L",
                "pad": "3",
                "text": "l"
              },
              {
                "width": "5",
                "id": "T_spacer_default",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "shift",
                "width": "125",
                "id": "K_SHIFT",
                "pad": "1",
                "sp": "1",
                "text": "*Shift*",
                "sk": [
                  {
                    "nextlayer": "capslock",
                    "id": "K_CAPS",
                    "sp": "1",
                    "text": "*Caps*"
                  }
                ]
              },
              {
                "id": "K_Z",
                "pad": "5",
                "text": "z"
              },
              {
                "id": "K_X",
                "pad": "3",
                "text": "x"
              },
              {
                "id": "K_C",
                "pad": "3",
                "text": "c",
                "sk": [
                  {
                    "id": "U_00E7",
                    "text": "\u00E7"
                  },
                  {
                    "id": "U_0254",
                    "text": "\u0254"
                  }
                ]
              },
              {
                "id": "K_V",
                "pad": "3",
                "text": "v"
              },
              {
                "id": "K_B",
                "pad": "3",
                "text": "b",
                "sk": [
                  {
                    "id": "U_0253",
                    "text": "\u0253"
                  }
                ]
              },
              {
                "id": "K_N",
                "pad": "3",
                "text": "n",
                "sk": [
                  {
                    "id": "U_014B",
                    "text": "\u014B"
                  },
                  {
                    "id": "U_0272",
                    "text": "\u0272"
                  },
                  {
                    "id": "T_n_underdot",
                    "text": "n\u0323"
                  },
                  {
                    "id": "T_n_bar",
                    "text": "n\u0304"
                  },
                  {
                    "id": "U_00F1",
                    "text": "\u00F1"
                  },
                  {
                    "id": "T_n_underline",
                    "text": "n\u0331"
                  }
                ]
              },
              {
                "id": "K_M",
                "pad": "3",
                "text": "m",
                "sk": [
                  {
                    "id": "U_0271",
                    "text": "\u0271"
                  },
                  {
                    "id": "U_0303",
                    "text": "_\u0303"
                  }
                ]
              },
              {
                "width": "115",
                "id": "K_BKSP",
                "pad": "5",
                "sp": "1",
                "text": "*BkSp*"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "170",
                "id": "K_NUMLOCK",
                "pad": "3",
                "sp": "1",
                "text": "*123*"
              },
              {
                "id": "K_COMMA",
                "pad": "5",
                "text": ",",
                "sk": [
                  {
                    "id": "U_2018",
                    "text": "\u2018"
                  },
                  {
                    "id": "U_2019",
                    "text": "\u2019"
                  },
                  {
                    "id": "U_201C",
                    "text": "\u201C"
                  },
                  {
                    "id": "U_201D",
                    "text": "\u201D"
                  },
                  {
                    "id": "U_003C",
                    "text": "<"
                  },
                  {
                    "id": "U_003E",
                    "text": ">"
                  }
                ]
              },
              {
                "width": "80",
                "id": "K_LOPT",
                "pad": "3",
                "sp": "1",
                "text": "*Menu*"
              },
              {
                "width": "320",
                "id": "K_SPACE",
                "pad": "5",
                "sk": [
                  {
                    "layer": "shift",
                    "id": "K_HYPHEN",
                    "text": "_"
                  },
                  {
                    "id": "K_HYPHEN",
                    "text": "-"
                  },
                  {
                    "id": "K_LOPT",
                    "sp": "1",
                    "text": "Close"
                  },
                  {
                    "id": "U_2013",
                    "text": "\u2013"
                  },
                  {
                    "id": "U_2014",
                    "text": "\u2014"
                  }
                ]
              },
              {
                "nextlayer": "shift",
                "id": "K_PERIOD",
                "pad": "5",
                "text": ".",
                "sk": [
                  {
                    "id": "U_0022",
                    "text": "\""
                  },
                  {
                    "id": "U_005C",
                    "text": "\\"
                  },
                  {
                    "id": "U_003A",
                    "text": ":"
                  },
                  {
                    "id": "U_003B",
                    "text": ";"
                  },
                  {
                    "id": "U_0027",
                    "text": "'"
                  },
                  {
                    "id": "U_002C",
                    "text": ","
                  },
                  {
                    "nextlayer": "shift",
                    "layer": "shift",
                    "id": "K_SLASH",
                    "text": "?"
                  },
                  {
                    "nextlayer": "shift",
                    "layer": "shift",
                    "id": "K_1",
                    "text": "!"
                  },
                  {
                    "id": "U_2026",
                    "text": "\u2026"
                  }
                ]
              },
              {
                "nextlayer": "shift",
                "width": "170",
                "id": "K_ENTER",
                "pad": "5",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      },
      {
        "id": "shift",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_Q",
                "pad": "1",
                "text": "Q"
              },
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_W",
                "pad": "3",
                "text": "W"
              },
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_E",
                "pad": "3",
                "text": "E",
                "sk": [
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_0190",
                    "text": "\u0190"
                  },
                  {
                    "layer": "default",
                    "id": "T_ucE_underline",
                    "text": "E\u0331"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucE_underdot",
                    "text": "E\u0323"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_00C8",
                    "text": "\u00C8"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_00C9",
                    "text": "\u00C9"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00CA",
                    "text": "\u00CA"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00CB",
                    "text": "\u00CB"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_R",
                "pad": "3",
                "text": "R"
              },
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_T",
                "pad": "3",
                "text": "T",
                "sk": [
                  {
                    "id": "U_00DE",
                    "text": "\u00DE"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_Y",
                "pad": "3",
                "text": "Y",
                "sk": [
                  {
                    "nextlayer": "default",
                    "id": "U_01B3",
                    "text": "\u01B3"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00DD",
                    "text": "\u00DD"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_U",
                "pad": "3",
                "text": "U",
                "sk": [
                  {
                    "nextlayer": "default",
                    "id": "U_01B1",
                    "text": "\u01B1"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucU_underline",
                    "text": "U\u0331"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucU_underdot",
                    "text": "U\u0323"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00D9",
                    "text": "\u00D9"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00DA",
                    "text": "\u00DA"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00DB",
                    "text": "\u00DB"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00DC",
                    "text": "\u00DC"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_I",
                "pad": "3",
                "text": "I",
                "sk": [
                  {
                    "nextlayer": "default",
                    "id": "U_0197",
                    "text": "\u0197"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucI_underline",
                    "text": "I\u0331"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucI_underdot",
                    "text": "I\u0323"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00CC",
                    "text": "\u00CC"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00CD",
                    "text": "\u00CD"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00CE",
                    "text": "\u00CE"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00CF",
                    "text": "\u00CF"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_O",
                "pad": "3",
                "text": "O",
                "sk": [
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_0186",
                    "text": "\u0186"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucO_underline",
                    "text": "O\u0331"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucO_underdot",
                    "text": "O\u0323"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_00D2",
                    "text": "\u00D2"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_00D3",
                    "text": "\u00D3"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_00D4",
                    "text": "\u00D4"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_00D5",
                    "text": "\u00D5"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_00D6",
                    "text": "\u00D6"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_00D8",
                    "text": "\u00D8"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "width": "95",
                "id": "K_P",
                "pad": "3",
                "text": "P"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "nextlayer": "default",
                "id": "K_A",
                "pad": "30",
                "text": "A",
                "sk": [
                  {
                    "nextlayer": "default",
                    "id": "U_018F",
                    "text": "\u018F"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucA_underline",
                    "text": "A\u0331"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucA_underdot",
                    "text": "A\u0323"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00C0",
                    "text": "\u00C0"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00C1",
                    "text": "\u00C1"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00C2",
                    "text": "\u00C2"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00C3",
                    "text": "\u00C3"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00C4",
                    "text": "\u00C4"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00C5",
                    "text": "\u00C5"
                  },
                  {
                    "nextlayer": "default",
                    "id": "U_00C6",
                    "text": "\u00C6"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "id": "K_S",
                "pad": "3",
                "text": "S"
              },
              {
                "nextlayer": "default",
                "id": "K_D",
                "pad": "3",
                "text": "D",
                "sk": [
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_018A",
                    "text": "\u018A"
                  },
                  {
                    "layer": "default",
                    "id": "U_00D0",
                    "text": "\u00D0"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "id": "K_F",
                "pad": "3",
                "text": "F"
              },
              {
                "nextlayer": "default",
                "id": "K_G",
                "pad": "3",
                "text": "G"
              },
              {
                "nextlayer": "default",
                "id": "K_H",
                "pad": "3",
                "text": "H"
              },
              {
                "nextlayer": "default",
                "id": "K_J",
                "pad": "3",
                "text": "J"
              },
              {
                "nextlayer": "default",
                "id": "K_K",
                "pad": "3",
                "text": "K",
                "sk": [
                  {
                    "id": "U_0198",
                    "text": "\u0198"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "id": "K_L",
                "pad": "3",
                "text": "L"
              },
              {
                "width": "5",
                "id": "T_new_404",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "default",
                "width": "125",
                "id": "K_SHIFT",
                "pad": "1",
                "sp": "2",
                "text": "*Shift*",
                "sk": [
                  {
                    "nextlayer": "capslock",
                    "id": "K_CAPS",
                    "sp": "1",
                    "text": "*Caps*"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "id": "K_Z",
                "pad": "5",
                "text": "Z"
              },
              {
                "nextlayer": "default",
                "id": "K_X",
                "pad": "3",
                "text": "X"
              },
              {
                "nextlayer": "default",
                "id": "K_C",
                "pad": "3",
                "text": "C",
                "sk": [
                  {
                    "id": "U_00C7",
                    "text": "\u00C7"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "id": "K_V",
                "pad": "3",
                "text": "V"
              },
              {
                "nextlayer": "default",
                "id": "K_B",
                "pad": "3",
                "text": "B",
                "sk": [
                  {
                    "id": "U_0181",
                    "text": "\u0181"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "id": "K_N",
                "pad": "3",
                "text": "N",
                "sk": [
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_014A",
                    "text": "\u014A"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_019D",
                    "text": "\u019D"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucN_underdot",
                    "text": "N\u0323"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "T_ucN_underline",
                    "text": "\u1E48"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "U_00D1",
                    "text": "\u00D1"
                  }
                ]
              },
              {
                "nextlayer": "default",
                "id": "K_M",
                "pad": "3",
                "text": "M",
                "sk": [
                  {
                    "id": "U_2C6E",
                    "text": "\u2C6E"
                  }
                ]
              },
              {
                "width": "115",
                "id": "K_BKSP",
                "pad": "5",
                "sp": "1",
                "text": "*BkSp*"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "170",
                "id": "K_NUMLOCK",
                "pad": "1",
                "sp": "1",
                "text": "*123*"
              },
              {
                "layer": "default",
                "id": "K_COMMA",
                "pad": "5",
                "text": ",",
                "sk": [
                  {
                    "layer": "default",
                    "id": "U_2018",
                    "text": "\u2018"
                  },
                  {
                    "layer": "default",
                    "id": "U_2019",
                    "text": "\u2019"
                  },
                  {
                    "layer": "default",
                    "id": "U_201C",
                    "text": "\u201C"
                  },
                  {
                    "layer": "default",
                    "id": "U_201D",
                    "text": "\u201D"
                  },
                  {
                    "layer": "default",
                    "id": "U_003C",
                    "text": "<"
                  },
                  {
                    "layer": "default",
                    "id": "U_003E",
                    "text": ">"
                  }
                ]
              },
              {
                "width": "80",
                "id": "U_1F600",
                "pad": "3",
                "text": "\uD83D\uDE00",
                "sk": [
                  {
                    "id": "U_1F601",
                    "text": "\uD83D\uDE01"
                  },
                  {
                    "id": "U_1F602",
                    "text": "\uD83D\uDE02"
                  },
                  {
                    "id": "U_1F606",
                    "text": "\uD83D\uDE06"
                  },
                  {
                    "id": "U_1F609",
                    "text": "\uD83D\uDE09"
                  },
                  {
                    "id": "U_1F60F",
                    "text": "\uD83D\uDE0F"
                  },
                  {
                    "id": "U_1F610",
                    "text": "\uD83D\uDE10"
                  },
                  {
                    "id": "U_1F615",
                    "text": "\uD83D\uDE15"
                  },
                  {
                    "id": "U_1F617",
                    "text": "\uD83D\uDE17"
                  },
                  {
                    "id": "U_1F622",
                    "text": "\uD83D\uDE22"
                  },
                  {
                    "id": "U_1F62E",
                    "text": "\uD83D\uDE2E"
                  },
                  {
                    "id": "U_1F643",
                    "text": "\uD83D\uDE43"
                  },
                  {
                    "id": "U_1F644",
                    "text": "\uD83D\uDE44"
                  },
                  {
                    "id": "U_1F64F",
                    "text": "\uD83D\uDE4F"
                  }
                ]
              },
              {
                "nextlayer": "shift",
                "layer": "shift",
                "width": "320",
                "id": "K_SPACE",
                "pad": "5",
                "sk": [
                  {
                    "nextlayer": "shift",
                    "layer": "shift",
                    "id": "K_HYPHEN",
                    "text": "_"
                  },
                  {
                    "id": "K_HYPHEN",
                    "text": "-"
                  },
                  {
                    "layer": "default",
                    "id": "K_LOPT",
                    "sp": "1",
                    "text": "Close"
                  },
                  {
                    "id": "U_2013",
                    "text": "\u2013"
                  },
                  {
                    "id": "U_2014",
                    "text": "\u2014"
                  }
                ]
              },
              {
                "nextlayer": "shift",
                "layer": "default",
                "id": "K_PERIOD",
                "pad": "3",
                "text": ".",
                "sk": [
                  {
                    "layer": "default",
                    "id": "U_0022",
                    "text": "\""
                  },
                  {
                    "layer": "default",
                    "id": "U_005C",
                    "text": "\\"
                  },
                  {
                    "layer": "default",
                    "id": "U_003A",
                    "text": ":"
                  },
                  {
                    "layer": "default",
                    "id": "U_003B",
                    "text": ";"
                  },
                  {
                    "layer": "default",
                    "id": "U_0027",
                    "text": "'"
                  },
                  {
                    "layer": "default",
                    "id": "U_002C",
                    "text": ","
                  },
                  {
                    "nextlayer": "shift",
                    "layer": "default",
                    "id": "U_003F",
                    "text": "?"
                  },
                  {
                    "nextlayer": "shift",
                    "layer": "default",
                    "id": "U_0021",
                    "text": "!"
                  },
                  {
                    "layer": "default",
                    "id": "U_2026",
                    "text": "\u2026"
                  }
                ]
              },
              {
                "nextlayer": "shift",
                "width": "170",
                "id": "K_ENTER",
                "pad": "5",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      },
      {
        "id": "numeric",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "width": "95",
                "id": "K_1",
                "pad": "1",
                "text": "1"
              },
              {
                "width": "95",
                "id": "K_2",
                "pad": "3",
                "text": "2"
              },
              {
                "width": "95",
                "id": "K_3",
                "pad": "3",
                "text": "3"
              },
              {
                "width": "95",
                "id": "K_4",
                "pad": "3",
                "text": "4"
              },
              {
                "width": "95",
                "id": "K_5",
                "pad": "3",
                "text": "5"
              },
              {
                "width": "95",
                "id": "K_6",
                "pad": "3",
                "text": "6"
              },
              {
                "width": "95",
                "id": "K_7",
                "pad": "3",
                "text": "7"
              },
              {
                "width": "95",
                "id": "K_8",
                "pad": "3",
                "text": "8"
              },
              {
                "width": "95",
                "id": "K_9",
                "pad": "3",
                "text": "9"
              },
              {
                "width": "95",
                "id": "K_0",
                "pad": "3",
                "text": "0"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "id": "U_20A6",
                "pad": "30",
                "text": "\u20A6",
                "sk": [
                  {
                    "id": "U_20A6",
                    "text": "\u20A6"
                  },
                  {
                    "layer": "shift",
                    "id": "K_4",
                    "text": "$"
                  },
                  {
                    "id": "U_00A3",
                    "text": "\u00A3"
                  }
                ]
              },
              {
                "layer": "shift",
                "id": "K_2",
                "pad": "3",
                "text": "@"
              },
              {
                "layer": "shift",
                "id": "K_3",
                "pad": "3",
                "text": "#",
                "sk": [
                  {
                    "id": "U_20A6",
                    "text": "\u20A6"
                  }
                ]
              },
              {
                "layer": "shift",
                "id": "K_5",
                "pad": "3",
                "text": "%"
              },
              {
                "layer": "shift",
                "id": "K_7",
                "pad": "3",
                "text": "&"
              },
              {
                "layer": "shift",
                "id": "K_HYPHEN",
                "pad": "3",
                "text": "_"
              },
              {
                "layer": "default",
                "id": "K_EQUAL",
                "pad": "3",
                "text": "="
              },
              {
                "layer": "shift",
                "id": "K_BKSLASH",
                "pad": "3",
                "text": "|"
              },
              {
                "layer": "default",
                "id": "K_BKSLASH",
                "pad": "3",
                "text": "\\"
              },
              {
                "width": "5",
                "id": "T_new_574",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "symbol",
                "width": "125",
                "id": "K_SYMBOLS",
                "pad": "1",
                "sp": "1",
                "text": "*Symbol*"
              },
              {
                "id": "K_LBRKT",
                "pad": "5",
                "text": "[",
                "sk": [
                  {
                    "id": "U_00AB",
                    "text": "\u00AB"
                  },
                  {
                    "id": "U_003C",
                    "text": "<"
                  },
                  {
                    "id": "U_007B",
                    "text": "{"
                  }
                ]
              },
              {
                "layer": "shift",
                "id": "K_9",
                "pad": "3",
                "text": "("
              },
              {
                "layer": "shift",
                "id": "K_0",
                "pad": "3",
                "text": ")"
              },
              {
                "id": "K_RBRKT",
                "pad": "3",
                "text": "]",
                "sk": [
                  {
                    "id": "U_00BB",
                    "text": "\u00BB"
                  },
                  {
                    "id": "U_003E",
                    "text": ">"
                  },
                  {
                    "id": "U_007D",
                    "text": "}"
                  }
                ]
              },
              {
                "layer": "shift",
                "id": "K_EQUAL",
                "pad": "3",
                "text": "+"
              },
              {
                "layer": "default",
                "id": "K_HYPHEN",
                "pad": "3",
                "text": "-"
              },
              {
                "layer": "default",
                "id": "K_SLASH",
                "pad": "3",
                "text": "/"
              },
              {
                "width": "115",
                "id": "K_BKSP",
                "pad": "5",
                "sp": "1",
                "text": "*BkSp*"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "default",
                "width": "170",
                "id": "K_LOWER",
                "pad": "1",
                "sp": "2",
                "text": "*abc*"
              },
              {
                "layer": "shift",
                "id": "K_8",
                "pad": "5",
                "text": "*"
              },
              {
                "width": "80",
                "id": "U_1F600",
                "pad": "3",
                "text": "\uD83D\uDE00",
                "sk": [
                  {
                    "id": "U_1F601",
                    "text": "\uD83D\uDE01"
                  },
                  {
                    "id": "U_1F602",
                    "text": "\uD83D\uDE02"
                  },
                  {
                    "id": "U_1F606",
                    "text": "\uD83D\uDE06"
                  },
                  {
                    "id": "U_1F609",
                    "text": "\uD83D\uDE09"
                  },
                  {
                    "id": "U_1F60F",
                    "text": "\uD83D\uDE0F"
                  },
                  {
                    "id": "U_1F610",
                    "text": "\uD83D\uDE10"
                  },
                  {
                    "id": "U_1F615",
                    "text": "\uD83D\uDE15"
                  },
                  {
                    "id": "U_1F617",
                    "text": "\uD83D\uDE17"
                  },
                  {
                    "id": "U_1F622",
                    "text": "\uD83D\uDE22"
                  },
                  {
                    "id": "U_1F62E",
                    "text": "\uD83D\uDE2E"
                  },
                  {
                    "id": "U_1F643",
                    "text": "\uD83D\uDE43"
                  },
                  {
                    "id": "U_1F644",
                    "text": "\uD83D\uDE44"
                  },
                  {
                    "id": "U_1F64F",
                    "text": "\uD83D\uDE4F"
                  }
                ]
              },
              {
                "width": "320",
                "id": "K_SPACE",
                "pad": "5",
                "sk": [
                  {
                    "layer": "shift",
                    "id": "K_HYPHEN",
                    "text": "_"
                  },
                  {
                    "id": "K_HYPHEN",
                    "text": "-"
                  },
                  {
                    "layer": "default",
                    "id": "K_LOPT",
                    "sp": "1",
                    "text": "Close"
                  },
                  {
                    "id": "U_2013",
                    "text": "\u2013"
                  },
                  {
                    "id": "U_2014",
                    "text": "\u2014"
                  },
                  {
                    "id": "T_new_635",
                    "sp": "10"
                  }
                ]
              },
              {
                "nextlayer": "shift",
                "id": "K_PERIOD",
                "pad": "3",
                "text": ".",
                "sk": [
                  {
                    "id": "U_0022",
                    "text": "\""
                  },
                  {
                    "id": "U_005C",
                    "text": "\\"
                  },
                  {
                    "id": "U_003A",
                    "text": ":"
                  },
                  {
                    "id": "U_003B",
                    "text": ";"
                  },
                  {
                    "id": "U_0027",
                    "text": "'"
                  },
                  {
                    "id": "U_002C",
                    "text": ","
                  },
                  {
                    "nextlayer": "shift",
                    "id": "U_003F",
                    "text": "?"
                  },
                  {
                    "nextlayer": "shift",
                    "id": "U_0021",
                    "text": "!"
                  },
                  {
                    "id": "U_2026",
                    "text": "\u2026"
                  }
                ]
              },
              {
                "width": "170",
                "id": "K_ENTER",
                "pad": "5",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      },
      {
        "id": "symbol",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "width": "95",
                "id": "K_1",
                "pad": "1",
                "text": "1"
              },
              {
                "width": "95",
                "id": "K_2",
                "pad": "3",
                "text": "2"
              },
              {
                "width": "95",
                "id": "K_3",
                "pad": "3",
                "text": "3"
              },
              {
                "width": "95",
                "id": "K_4",
                "pad": "3",
                "text": "4"
              },
              {
                "width": "95",
                "id": "K_5",
                "pad": "3",
                "text": "5"
              },
              {
                "width": "95",
                "id": "K_6",
                "pad": "3",
                "text": "6"
              },
              {
                "width": "95",
                "id": "K_7",
                "pad": "3",
                "text": "7"
              },
              {
                "width": "95",
                "id": "K_8",
                "pad": "3",
                "text": "8"
              },
              {
                "width": "95",
                "id": "K_9",
                "pad": "3",
                "text": "9"
              },
              {
                "width": "95",
                "id": "K_0",
                "pad": "3",
                "text": "0"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "width": "95",
                "id": "U_0060",
                "pad": "1",
                "text": "`"
              },
              {
                "width": "95",
                "id": "U_007E",
                "pad": "3",
                "text": "~"
              },
              {
                "width": "95",
                "id": "U_005E",
                "pad": "3",
                "text": "^"
              },
              {
                "width": "95",
                "id": "U_00A8",
                "pad": "3",
                "text": "\u00A8"
              },
              {
                "width": "95",
                "id": "U_00B4",
                "pad": "3",
                "text": "\u00B4"
              },
              {
                "width": "95",
                "id": "U_00B8",
                "pad": "3",
                "text": "\u00B8"
              },
              {
                "width": "95",
                "id": "U_00AF",
                "pad": "3",
                "text": "\u00AF"
              },
              {
                "width": "95",
                "id": "U_00BF",
                "pad": "3",
                "text": "\u00BF"
              },
              {
                "width": "95",
                "id": "U_00A1",
                "pad": "3",
                "text": "\u00A1"
              },
              {
                "width": "94",
                "id": "U_00AC",
                "pad": "3",
                "text": "\u00AC"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "id": "U_00AA",
                "pad": "30",
                "text": "\u00AA"
              },
              {
                "id": "U_00BA",
                "pad": "3",
                "text": "\u00BA"
              },
              {
                "id": "U_00B6",
                "pad": "3",
                "text": "\u00B6"
              },
              {
                "id": "U_00A7",
                "pad": "3",
                "text": "\u00A7"
              },
              {
                "id": "U_00B1",
                "pad": "3",
                "text": "\u00B1"
              },
              {
                "id": "U_00D7",
                "pad": "3",
                "text": "\u00D7"
              },
              {
                "id": "U_00F7",
                "pad": "3",
                "text": "\u00F7"
              },
              {
                "id": "U_00A6",
                "pad": "3",
                "text": "\u00A6"
              },
              {
                "id": "U_00B0",
                "pad": "3",
                "text": "\u00B0"
              },
              {
                "width": "5",
                "id": "T_new_221",
                "sp": "10"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "125",
                "id": "K_NUMLOCK",
                "pad": "1",
                "sp": "2",
                "text": "*123*"
              },
              {
                "id": "U_00B5",
                "pad": "5",
                "text": "\u00B5"
              },
              {
                "id": "U_00A9",
                "pad": "3",
                "text": "\u00A9"
              },
              {
                "id": "U_00AE",
                "pad": "3",
                "text": "\u00AE"
              },
              {
                "id": "U_00A3",
                "pad": "3",
                "text": "\u00A3"
              },
              {
                "id": "U_20AC",
                "pad": "3",
                "text": "\u20AC"
              },
              {
                "id": "U_00A5",
                "pad": "3",
                "text": "\u00A5"
              },
              {
                "id": "U_2022",
                "pad": "3",
                "text": "\u2022"
              },
              {
                "width": "115",
                "id": "K_BKSP",
                "pad": "5",
                "sp": "1",
                "text": "*BkSp*"
              }
            ]
          },
          {
            "id": "5",
            "key": [
              {
                "nextlayer": "default",
                "width": "200",
                "id": "K_LOWER",
                "pad": "1",
                "sp": "1",
                "text": "*abc*"
              },
              {
                "id": "K_COMMA",
                "pad": "5",
                "text": ",",
                "sk": [
                  {
                    "id": "U_2018",
                    "text": "\u2018"
                  },
                  {
                    "id": "U_2019",
                    "text": "\u2019"
                  },
                  {
                    "id": "U_201C",
                    "text": "\u201C"
                  },
                  {
                    "id": "U_201D",
                    "text": "\u201D"
                  },
                  {
                    "id": "U_003C",
                    "text": "<"
                  },
                  {
                    "id": "U_003E",
                    "text": ">"
                  }
                ]
              },
              {
                "id": "U_1F600",
                "pad": "3",
                "text": "\uD83D\uDE00",
                "sk": [
                  {
                    "id": "U_1F601",
                    "text": "\uD83D\uDE01"
                  },
                  {
                    "id": "U_1F602",
                    "text": "\uD83D\uDE02"
                  },
                  {
                    "id": "U_1F606",
                    "text": "\uD83D\uDE06"
                  },
                  {
                    "id": "U_1F609",
                    "text": "\uD83D\uDE09"
                  },
                  {
                    "id": "U_1F60F",
                    "text": "\uD83D\uDE0F"
                  },
                  {
                    "id": "U_1F610",
                    "text": "\uD83D\uDE10"
                  },
                  {
                    "id": "U_1F615",
                    "text": "\uD83D\uDE15"
                  },
                  {
                    "id": "U_1F617",
                    "text": "\uD83D\uDE17"
                  },
                  {
                    "id": "U_1F622",
                    "text": "\uD83D\uDE22"
                  },
                  {
                    "id": "U_1F62E",
                    "text": "\uD83D\uDE2E"
                  },
                  {
                    "id": "U_1F643",
                    "text": "\uD83D\uDE43"
                  },
                  {
                    "id": "U_1F644",
                    "text": "\uD83D\uDE44"
                  },
                  {
                    "id": "U_1F64F",
                    "text": "\uD83D\uDE4F"
                  }
                ]
              },
              {
                "width": "210",
                "id": "K_SPACE",
                "pad": "5",
                "sk": [
                  {
                    "layer": "shift",
                    "id": "K_HYPHEN",
                    "text": "_"
                  },
                  {
                    "id": "K_HYPHEN",
                    "text": "-"
                  },
                  {
                    "id": "K_LOPT",
                    "sp": "1",
                    "text": "Close"
                  },
                  {
                    "id": "U_2013",
                    "text": "\u2013"
                  },
                  {
                    "id": "U_2014",
                    "text": "\u2014"
                  }
                ]
              },
              {
                "nextlayer": "shift",
                "id": "K_PERIOD",
                "pad": "3",
                "text": ".",
                "sk": [
                  {
                    "id": "U_0022",
                    "text": "\""
                  },
                  {
                    "id": "U_005C",
                    "text": "\\"
                  },
                  {
                    "id": "U_003A",
                    "text": ":"
                  },
                  {
                    "id": "U_003B",
                    "text": ";"
                  },
                  {
                    "id": "U_0027",
                    "text": "'"
                  },
                  {
                    "id": "U_002C",
                    "text": ","
                  },
                  {
                    "nextlayer": "shift",
                    "id": "U_003F",
                    "text": "?"
                  },
                  {
                    "nextlayer": "shift",
                    "id": "U_0021",
                    "text": "!"
                  },
                  {
                    "id": "U_2026",
                    "text": "\u2026"
                  }
                ]
              },
              {
                "id": "U_00B7",
                "text": "\u00B7"
              },
              {
                "width": "135",
                "id": "K_ENTER",
                "pad": "5",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      },
      {
        "id": "capslock",
        "row": [
          {
            "id": "1",
            "key": [
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_Q",
                "pad": "1",
                "text": "Q"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_W",
                "pad": "3",
                "text": "W"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_E",
                "pad": "3",
                "text": "E",
                "sk": [
                  {
                    "id": "U_0190",
                    "text": "\u0190"
                  },
                  {
                    "id": "T_ucE_underline",
                    "text": "E\u0331"
                  },
                  {
                    "id": "T_ucE_underdot",
                    "text": "E\u0323"
                  },
                  {
                    "id": "U_00C8",
                    "text": "\u00C8"
                  },
                  {
                    "id": "U_00C9",
                    "text": "\u00C9"
                  },
                  {
                    "id": "U_00CA",
                    "text": "\u00CA"
                  },
                  {
                    "id": "U_00CB",
                    "text": "\u00CB"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_R",
                "pad": "3",
                "text": "R"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_T",
                "pad": "3",
                "text": "T",
                "sk": [
                  {
                    "id": "U_00DE",
                    "text": "\u00DE"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_Y",
                "pad": "3",
                "text": "Y",
                "sk": [
                  {
                    "id": "U_00DD",
                    "text": "\u00DD"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_U",
                "pad": "3",
                "text": "U",
                "sk": [
                  {
                    "id": "U_01B1",
                    "text": "\u01B1"
                  },
                  {
                    "id": "T_ucU_underline",
                    "text": "U\u0331"
                  },
                  {
                    "id": "T_ucU_underdot",
                    "text": "U\u0323"
                  },
                  {
                    "id": "U_00D9",
                    "text": "\u00D9"
                  },
                  {
                    "id": "U_00DA",
                    "text": "\u00DA"
                  },
                  {
                    "id": "U_00DB",
                    "text": "\u00DB"
                  },
                  {
                    "id": "U_00DC",
                    "text": "\u00DC"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_I",
                "pad": "3",
                "text": "I",
                "sk": [
                  {
                    "id": "U_0197",
                    "text": "\u0197"
                  },
                  {
                    "id": "T_ucI_underline",
                    "text": "I\u0331"
                  },
                  {
                    "id": "T_ucI_underdot",
                    "text": "I\u0323"
                  },
                  {
                    "id": "U_00CC",
                    "text": "\u00CC"
                  },
                  {
                    "id": "U_00CD",
                    "text": "\u00CD"
                  },
                  {
                    "id": "U_00CE",
                    "text": "\u00CE"
                  },
                  {
                    "id": "U_00CF",
                    "text": "\u00CF"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_O",
                "pad": "3",
                "text": "O",
                "sk": [
                  {
                    "id": "U_0186",
                    "text": "\u0186"
                  },
                  {
                    "id": "T_ucO_underline",
                    "text": "O\u0331"
                  },
                  {
                    "id": "T_ucO_underdot",
                    "text": "O\u0323"
                  },
                  {
                    "id": "U_00D2",
                    "text": "\u00D2"
                  },
                  {
                    "id": "U_00D3",
                    "text": "\u00D3"
                  },
                  {
                    "id": "U_00D4",
                    "text": "\u00D4"
                  },
                  {
                    "id": "U_00D5",
                    "text": "\u00D5"
                  },
                  {
                    "id": "U_00D6",
                    "text": "\u00D6"
                  },
                  {
                    "id": "U_00D8",
                    "text": "\u00D8"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "width": "95",
                "id": "K_P",
                "pad": "3",
                "text": "P"
              }
            ]
          },
          {
            "id": "2",
            "key": [
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_A",
                "pad": "30",
                "text": "A",
                "sk": [
                  {
                    "id": "U_018F",
                    "text": "\u018F"
                  },
                  {
                    "id": "T_ucA_underline",
                    "text": "A\u0331"
                  },
                  {
                    "id": "T_ucA_underdot",
                    "text": "A\u0323"
                  },
                  {
                    "id": "U_00C0",
                    "text": "\u00C0"
                  },
                  {
                    "id": "U_00C1",
                    "text": "\u00C1"
                  },
                  {
                    "id": "U_00C2",
                    "text": "\u00C2"
                  },
                  {
                    "id": "U_00C3",
                    "text": "\u00C3"
                  },
                  {
                    "id": "U_00C4",
                    "text": "\u00C4"
                  },
                  {
                    "id": "U_00C5",
                    "text": "\u00C5"
                  },
                  {
                    "id": "U_00C6",
                    "text": "\u00C6"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_S",
                "pad": "3",
                "text": "S"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_D",
                "pad": "3",
                "text": "D",
                "sk": [
                  {
                    "id": "U_018A",
                    "text": "\u018A"
                  },
                  {
                    "id": "U_00D0",
                    "text": "\u00D0"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_F",
                "pad": "3",
                "text": "F"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_G",
                "pad": "3",
                "text": "G"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_H",
                "pad": "3",
                "text": "H"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_J",
                "pad": "3",
                "text": "J"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_K",
                "pad": "3",
                "text": "K",
                "sk": [
                  {
                    "id": "U_0198",
                    "text": "\u0198"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_L",
                "pad": "3",
                "text": "L"
              },
              {
                "width": "5",
                "id": "T_new_404",
                "sp": "10"
              }
            ]
          },
          {
            "id": "3",
            "key": [
              {
                "nextlayer": "default",
                "width": "125",
                "id": "K_CAPS",
                "pad": "1",
                "sp": "2",
                "text": "*Caps*"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_Z",
                "pad": "5",
                "text": "Z"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_X",
                "pad": "3",
                "text": "X"
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_C",
                "pad": "3",
                "text": "C",
                "sk": [
                  {
                    "id": "U_00C7",
                    "text": "\u00C7"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_V",
                "pad": "3",
                "text": "V",
                "sk": [
                  {
                    "id": "U_01B2",
                    "text": "\u01B2"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_B",
                "pad": "3",
                "text": "B",
                "sk": [
                  {
                    "id": "U_0181",
                    "text": "\u0181"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_N",
                "pad": "3",
                "text": "N",
                "sk": [
                  {
                    "id": "U_014A",
                    "text": "\u014A"
                  },
                  {
                    "id": "U_019D",
                    "text": "\u019D"
                  },
                  {
                    "id": "U_00D1",
                    "text": "\u00D1"
                  },
                  {
                    "id": "T_ucN_underdot",
                    "text": "N\u0323"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "layer": "shift",
                "id": "K_M",
                "pad": "3",
                "text": "M",
                "sk": [
                  {
                    "id": "U_2C6E",
                    "text": "\u2C6E"
                  }
                ]
              },
              {
                "width": "115",
                "id": "K_BKSP",
                "pad": "5",
                "sp": "1",
                "text": "*BkSp*"
              }
            ]
          },
          {
            "id": "4",
            "key": [
              {
                "nextlayer": "numeric",
                "width": "170",
                "id": "K_NUMLOCK",
                "pad": "1",
                "sp": "1",
                "text": "*123*"
              },
              {
                "id": "K_COMMA",
                "pad": "5",
                "text": ",",
                "sk": [
                  {
                    "id": "U_2018",
                    "text": "\u2018"
                  },
                  {
                    "id": "U_2019",
                    "text": "\u2019"
                  },
                  {
                    "id": "U_201C",
                    "text": "\u201C"
                  },
                  {
                    "id": "U_201D",
                    "text": "\u201D"
                  },
                  {
                    "id": "U_003C",
                    "text": "<"
                  },
                  {
                    "id": "U_003E",
                    "text": ">"
                  }
                ]
              },
              {
                "width": "80",
                "id": "U_1F600",
                "pad": "3",
                "text": "\uD83D\uDE00",
                "sk": [
                  {
                    "id": "U_1F601",
                    "text": "\uD83D\uDE01"
                  },
                  {
                    "id": "U_1F602",
                    "text": "\uD83D\uDE02"
                  },
                  {
                    "id": "U_1F606",
                    "text": "\uD83D\uDE06"
                  },
                  {
                    "id": "U_1F609",
                    "text": "\uD83D\uDE09"
                  },
                  {
                    "id": "U_1F60F",
                    "text": "\uD83D\uDE0F"
                  },
                  {
                    "id": "U_1F610",
                    "text": "\uD83D\uDE10"
                  },
                  {
                    "id": "U_1F615",
                    "text": "\uD83D\uDE15"
                  },
                  {
                    "id": "U_1F617",
                    "text": "\uD83D\uDE17"
                  },
                  {
                    "id": "U_1F622",
                    "text": "\uD83D\uDE22"
                  },
                  {
                    "id": "U_1F62E",
                    "text": "\uD83D\uDE2E"
                  },
                  {
                    "id": "U_1F643",
                    "text": "\uD83D\uDE43"
                  },
                  {
                    "id": "U_1F644",
                    "text": "\uD83D\uDE44"
                  },
                  {
                    "id": "U_1F64F",
                    "text": "\uD83D\uDE4F"
                  }
                ]
              },
              {
                "nextlayer": "capslock",
                "width": "320",
                "id": "K_SPACE",
                "pad": "5",
                "sk": [
                  {
                    "layer": "shift",
                    "id": "K_HYPHEN",
                    "text": "_"
                  },
                  {
                    "id": "K_HYPHEN",
                    "text": "-"
                  },
                  {
                    "id": "T_new_270",
                    "sp": "10"
                  },
                  {
                    "nextlayer": "default",
                    "layer": "default",
                    "id": "K_LOPT",
                    "sp": "1",
                    "text": "Close"
                  },
                  {
                    "id": "T_new_271",
                    "sp": "10"
                  },
                  {
                    "id": "U_2013",
                    "text": "\u2013"
                  },
                  {
                    "id": "U_2014",
                    "text": "\u2014"
                  }
                ]
              },
              {
                "nextlayer": "shift",
                "id": "K_PERIOD",
                "pad": "3",
                "text": ".",
                "sk": [
                  {
                    "id": "U_0022",
                    "text": "\""
                  },
                  {
                    "id": "U_005C",
                    "text": "\\"
                  },
                  {
                    "id": "U_003A",
                    "text": ":"
                  },
                  {
                    "id": "U_003B",
                    "text": ";"
                  },
                  {
                    "id": "U_0027",
                    "text": "'"
                  },
                  {
                    "id": "U_002C",
                    "text": ","
                  },
                  {
                    "nextlayer": "shift",
                    "id": "U_003F",
                    "text": "?"
                  },
                  {
                    "nextlayer": "shift",
                    "id": "U_0021",
                    "text": "!"
                  },
                  {
                    "id": "U_2026",
                    "text": "\u2026"
                  }
                ]
              },
              {
                "nextlayer": "shift",
                "width": "170",
                "id": "K_ENTER",
                "pad": "5",
                "sp": "1",
                "text": "*Enter*"
              }
            ]
          }
        ]
      }
    ]
  }
}
;
  this.KCSS="body {\n     background: green;\n }\n ";
  this.s_LtrsUnderlinable_11="aeiounhsAEIOUNHS";
  this.s_LtrsCURRENT_12="aəeɛiɨoɔuʊbɓcçdɗgɣhɦkƙnŋsʃvⱱyƴzʒAƏEƐIƗOƆUƱBƁCÇDƊGƔKƘNŊSƩVƲYƳZƷ$₦£?ˈ";
  this.s_LtrsCHANGED_13="əaɛeɨiɔoʊuɓbçcɗdɣgɦhƙkŋnʃsⱱvƴyʒzƏAƐEƗIƆOƱUƁBÇCƊDƔGƘGŊNƩSƲVƳYƷZ₦£$ˈ?";
  this.s_LtrsWithTone_14="qaəeɛiɨɪoɔuʊQAƏEƐIƗOƆUƱmnŋɲMNŊƝ";
  this.s_LtrsWithNasal_15="qaəeɛiɨɪoɔuʊnQAƏEƐIƗOƆUƱN";
  this.s_ToneSubset_16="̀́̂̌̄";
  this.s_Tone_17="̀́̂̄̋̌̏᷄᷅᷆᷇";
  this.s_ToneNasal_18="̀́̂̄̋̌̏᷄᷅᷆᷇̃";
  this.s_LtrsKey_19=";";
  this.s_ToneKey_20="`";
  this.s_NasalKey_21="~";
  this.s_UnderLine_22="̱";
  this.s_UnderDot_23="̣";
  this.s_changeshape_31=KeymanWeb.KLOAD(this.KI,"changeshape","1");
  this.s_canunderline_32="0";
  this.s38="shift";
  this.s39="shift";
  this.s40="shift";
  this.s41="shift";
  this.s42="shift";
  this.s43="shift";
  this.s44="2";
  this.s45="1";
  this.s46="2";
  this.s47="1";
  this.s48="0";
  this.s49="0";
  this.s50="2";
  this.s51="0";
  this.s52="1";
  this.KVER="14.0.274.0";
  this.gs=function(t,e) {
    return this.g_main_0(t,e);
  };
  this.g_main_0=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0x100)) {
      if(1){
        r=m=1;   // Line 86
        k.KO(0,t,"a̱");
      }
      else if(1){
        r=m=1;   // Line 99
        k.KO(0,t,"a̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x101)) {
      if(1){
        r=m=1;   // Line 87
        k.KO(0,t,"e̱");
      }
      else if(1){
        r=m=1;   // Line 100
        k.KO(0,t,"e̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x102)) {
      if(1){
        r=m=1;   // Line 88
        k.KO(0,t,"i̱");
      }
      else if(1){
        r=m=1;   // Line 101
        k.KO(0,t,"i̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x103)) {
      if(1){
        r=m=1;   // Line 89
        k.KO(0,t,"o̱");
      }
      else if(1){
        r=m=1;   // Line 102
        k.KO(0,t,"o̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x104)) {
      if(1){
        r=m=1;   // Line 90
        k.KO(0,t,"u̱");
      }
      else if(1){
        r=m=1;   // Line 103
        k.KO(0,t,"u̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x105)) {
      if(1){
        r=m=1;   // Line 91
        k.KO(0,t,"ạ");
      }
      else if(1){
        r=m=1;   // Line 104
        k.KO(0,t,"ạ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x106)) {
      if(1){
        r=m=1;   // Line 92
        k.KO(0,t,"ẹ");
      }
      else if(1){
        r=m=1;   // Line 105
        k.KO(0,t,"ẹ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x107)) {
      if(1){
        r=m=1;   // Line 93
        k.KO(0,t,"ị");
      }
      else if(1){
        r=m=1;   // Line 106
        k.KO(0,t,"ị");
      }
    }
    else if(k.KKM(e, 0x4000, 0x108)) {
      if(1){
        r=m=1;   // Line 94
        k.KO(0,t,"ọ");
      }
      else if(1){
        r=m=1;   // Line 107
        k.KO(0,t,"ọ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x109)) {
      if(1){
        r=m=1;   // Line 95
        k.KO(0,t,"ụ");
      }
      else if(1){
        r=m=1;   // Line 108
        k.KO(0,t,"ụ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10A)) {
      if(1){
        r=m=1;   // Line 96
        k.KO(0,t,"ṇ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10B)) {
      if(1){
        r=m=1;   // Line 97
        k.KO(0,t,"ṉ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10C)) {
      if(1){
        r=m=1;   // Line 98
        k.KO(0,t,"ḥ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10D)) {
      if(1){
        r=m=1;   // Line 109
        k.KO(0,t,"A̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10E)) {
      if(1){
        r=m=1;   // Line 110
        k.KO(0,t,"E̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x10F)) {
      if(1){
        r=m=1;   // Line 111
        k.KO(0,t,"I̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x110)) {
      if(1){
        r=m=1;   // Line 112
        k.KO(0,t,"O̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x111)) {
      if(1){
        r=m=1;   // Line 113
        k.KO(0,t,"U̱");
      }
    }
    else if(k.KKM(e, 0x4000, 0x112)) {
      if(1){
        r=m=1;   // Line 114
        k.KO(0,t,"Ạ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x113)) {
      if(1){
        r=m=1;   // Line 115
        k.KO(0,t,"Ẹ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x114)) {
      if(1){
        r=m=1;   // Line 116
        k.KO(0,t,"Ị");
      }
    }
    else if(k.KKM(e, 0x4000, 0x115)) {
      if(1){
        r=m=1;   // Line 117
        k.KO(0,t,"Ọ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x116)) {
      if(1){
        r=m=1;   // Line 118
        k.KO(0,t,"Ụ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x117)) {
      if(1){
        r=m=1;   // Line 119
        k.KO(0,t,"Ṇ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x118)) {
      if(1){
        r=m=1;   // Line 120
        k.KO(0,t,"Ṉ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x119)) {
      if(1){
        r=m=1;   // Line 121
        k.KO(0,t,"Ḥ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x11A)) {
      if(1){
        r=m=1;   // Line 122
        k.KO(0,t,"n̄");
      }
    }
    else if(k.KKM(e, 0x4000, 0x11B)) {
      if(1){
        r=m=1;   // Line 123
        k.KO(0,t,"N̄");
      }
    }
    else if(k.KKM(e, 0x4000, 0x11C)) {
      if(1){
        r=m=1;   // Line 124
        k.KO(0,t,"q́");
      }
    }
    else if(k.KKM(e, 0x4000, 0x11D)) {
      if(1){
        r=m=1;   // Line 125
        k.KO(0,t,"q̀");
      }
    }
    else if(k.KKM(e, 0x4000, 0x11E)) {
      if(1){
        r=m=1;   // Line 126
        k.KO(0,t,"q̃");
      }
    }
    else if(k.KKM(e, 0x4000, 0x11F)) {
      if(1){
        r=m=1;   // Line 127
        k.KO(0,t,"Q́");
      }
    }
    else if(k.KKM(e, 0x4000, 0x120)) {
      if(1){
        r=m=1;   // Line 128
        k.KO(0,t,"Q̀");
      }
    }
    else if(k.KKM(e, 0x4000, 0x121)) {
      if(1){
        r=m=1;   // Line 129
        k.KO(0,t,"Q̃");
      }
    }
    else if(k.KKM(e, 0x4000, 0x122)) {
      if(1){
        r=m=1;   // Line 130
        k.KO(0,t,". ");
      }
    }
    else if(k.KKM(e, 0x4000, 0x20)) {
      if(k.KCM(1,t," ",1)){
        r=m=1;   // Line 157
        k.KO(1,t,". ");
        k.KSETS(33,this.s38,t);
      }
    }
    else if(k.KKM(e, 0x4010, 0x31)) {
      if(k.KCM(1,t," ",1)){
        r=m=1;   // Line 161
        k.KO(1,t,"! ");
        k.KSETS(33,this.s41,t);
      }
      else if(k.KCM(1,t," ",1)){
        r=m=1;   // Line 163
        k.KO(1,t,"! ");
        k.KSETS(33,this.s43,t);
      }
    }
    else if(k.KKM(e, 0x4000, 0xBC)) {
      if(k.KCM(1,t," ",1)){
        r=m=1;   // Line 159
        k.KO(1,t,", ");
      }
    }
    else if(k.KKM(e, 0x4000, 0xBE)) {
      if(k.KCM(1,t," ",1)){
        r=m=1;   // Line 158
        k.KO(1,t,". ");
        k.KSETS(33,this.s39,t);
      }
    }
    else if(k.KKM(e, 0x4000, 0xBA)) {
      if(k.KCM(1,t,"̱",1)){
        r=m=1;   // Line 202
        k.KO(1,t,"̣");
        this.s_changeshape_31=this.s44;
      }
      else if(k.KCM(1,t,"̣",1)){
        r=m=1;   // Line 204
        k.KO(1,t,"");
        this.s_changeshape_31=this.s45;
      }
      else if(this.s_changeshape_31===this.s46){
        r=m=1;   // Line 208
        r=this.g_changeShapeRules2_1(t,e);
      }
      else if(this.s_changeshape_31===this.s47){
        r=m=1;   // Line 209
        r=this.g_changeShapeRules_2(t,e);
      }
      else if(this.s_changeshape_31===this.s48){
        r=m=1;   // Line 210
        r=this.g_underlineRules_4(t,e);
      }
      else if(1){
        r=m=1;   // Line 194
        k.KO(0,t,";");
      }
    }
    else if(k.KKM(e, 0x4040, 0xBA)) {
      if(1){
        r=m=1;   // Line 85
        k.KO(0,t,";");
      }
      else if(1){
        r=m=1;   // Line 189
        k.KO(0,t,";");
      }
    }
    else if(k.KKM(e, 0x4010, 0xBF)) {
      if(k.KCM(1,t," ",1)){
        r=m=1;   // Line 160
        k.KO(1,t,"? ");
        k.KSETS(33,this.s40,t);
      }
      else if(k.KCM(1,t," ",1)){
        r=m=1;   // Line 162
        k.KO(1,t,"? ");
        k.KSETS(33,this.s42,t);
      }
    }
    else if(k.KKM(e, 0x4070, 0x41)) {
      if(1){
        r=m=1;   // Line 83
        k.KO(0,t,"Ə");
      }
    }
    else if(k.KKM(e, 0x4070, 0x42)) {
      if(1){
        r=m=1;   // Line 76
        k.KO(0,t,"Ɓ");
      }
    }
    else if(k.KKM(e, 0x4070, 0x44)) {
      if(1){
        r=m=1;   // Line 77
        k.KO(0,t,"Ɗ");
      }
    }
    else if(k.KKM(e, 0x4070, 0x45)) {
      if(1){
        r=m=1;   // Line 82
        k.KO(0,t,"Ɛ");
      }
    }
    else if(k.KKM(e, 0x4070, 0x49)) {
      if(1){
        r=m=1;   // Line 80
        k.KO(0,t,"Ɨ");
      }
    }
    else if(k.KKM(e, 0x4070, 0x4B)) {
      if(1){
        r=m=1;   // Line 75
        k.KO(0,t,"Ƙ");
      }
    }
    else if(k.KKM(e, 0x4070, 0x4E)) {
      if(1){
        r=m=1;   // Line 78
        k.KO(0,t,"Ŋ");
      }
    }
    else if(k.KKM(e, 0x4070, 0x4F)) {
      if(1){
        r=m=1;   // Line 79
        k.KO(0,t,"Ɔ");
      }
    }
    else if(k.KKM(e, 0x4070, 0x55)) {
      if(1){
        r=m=1;   // Line 81
        k.KO(0,t,"Ʊ");
      }
    }
    else if(k.KKM(e, 0x4070, 0x59)) {
      if(1){
        r=m=1;   // Line 74
        k.KO(0,t,"Ƴ");
      }
    }
    else if(k.KKM(e, 0x4000, 0xC0)) {
      if(k.KA(0,k.KC(1,1,t),this.s_LtrsWithTone_14)){
        r=m=1;   // Line 135
        k.KO(-1,t,"́");
      }
      else if(k.KCM(1,t,"́",1)){
        r=m=1;   // Line 136
        k.KO(1,t,"̀");
      }
      else if(k.KCM(1,t,"̀",1)){
        r=m=1;   // Line 137
        k.KO(1,t,"̂");
      }
      else if(k.KCM(1,t,"̂",1)){
        r=m=1;   // Line 138
        k.KO(1,t,"̌");
      }
      else if(k.KCM(1,t,"̌",1)){
        r=m=1;   // Line 139
        k.KO(1,t,"̄");
      }
      else if(k.KCM(1,t,"̄",1)){
        r=m=1;   // Line 140
        k.KO(1,t,"");
      }
      else if(k.KCM(1,t,"̃",1)){
        r=m=1;   // Line 141
        k.KO(-1,t,"́");
      }
      else if(1){
        r=m=1;   // Line 195
        k.KO(0,t,"`");
      }
    }
    else if(k.KKM(e, 0x4040, 0xC0)) {
      if(1){
        r=m=1;   // Line 190
        k.KO(0,t,"`");
      }
    }
    else if(k.KKM(e, 0x4060, 0x41)) {
      if(1){
        r=m=1;   // Line 73
        k.KO(0,t,"ə");
      }
    }
    else if(k.KKM(e, 0x4060, 0x42)) {
      if(1){
        r=m=1;   // Line 66
        k.KO(0,t,"ɓ");
      }
    }
    else if(k.KKM(e, 0x4060, 0x44)) {
      if(1){
        r=m=1;   // Line 67
        k.KO(0,t,"ɗ");
      }
    }
    else if(k.KKM(e, 0x4060, 0x45)) {
      if(1){
        r=m=1;   // Line 72
        k.KO(0,t,"ɛ");
      }
    }
    else if(k.KKM(e, 0x4060, 0x49)) {
      if(1){
        r=m=1;   // Line 70
        k.KO(0,t,"ɨ");
      }
    }
    else if(k.KKM(e, 0x4060, 0x4B)) {
      if(1){
        r=m=1;   // Line 65
        k.KO(0,t,"ƙ");
      }
    }
    else if(k.KKM(e, 0x4060, 0x4E)) {
      if(1){
        r=m=1;   // Line 68
        k.KO(0,t,"ŋ");
      }
    }
    else if(k.KKM(e, 0x4060, 0x4F)) {
      if(1){
        r=m=1;   // Line 69
        k.KO(0,t,"ɔ");
      }
    }
    else if(k.KKM(e, 0x4060, 0x55)) {
      if(1){
        r=m=1;   // Line 71
        k.KO(0,t,"ʊ");
      }
    }
    else if(k.KKM(e, 0x4060, 0x59)) {
      if(1){
        r=m=1;   // Line 64
        k.KO(0,t,"ƴ");
      }
    }
    else if(k.KKM(e, 0x4010, 0xC0)) {
      if(k.KCM(2,t,"̃",1)&&k.KA(1,k.KC(1,1,t),this.s_ToneSubset_16)){
        r=m=1;   // Line 148
        k.KIO(2,this.s_ToneSubset_16,2,t);
      }
      else if(k.KA(0,k.KC(2,1,t),this.s_LtrsWithNasal_15)&&k.KCM(1,t,"̀",1)){
        r=m=1;   // Line 149
        k.KIO(2,this.s_LtrsWithNasal_15,1,t);
        k.KO(-1,t,"̃̀");
      }
      else if(k.KA(0,k.KC(2,1,t),this.s_LtrsWithNasal_15)&&k.KCM(1,t,"́",1)){
        r=m=1;   // Line 150
        k.KIO(2,this.s_LtrsWithNasal_15,1,t);
        k.KO(-1,t,"̃́");
      }
      else if(k.KA(0,k.KC(2,1,t),this.s_LtrsWithNasal_15)&&k.KCM(1,t,"̂",1)){
        r=m=1;   // Line 151
        k.KIO(2,this.s_LtrsWithNasal_15,1,t);
        k.KO(-1,t,"̃̂");
      }
      else if(k.KA(0,k.KC(2,1,t),this.s_LtrsWithNasal_15)&&k.KCM(1,t,"̌",1)){
        r=m=1;   // Line 152
        k.KIO(2,this.s_LtrsWithNasal_15,1,t);
        k.KO(-1,t,"̃̌");
      }
      else if(k.KA(0,k.KC(2,1,t),this.s_LtrsWithNasal_15)&&k.KCM(1,t,"̄",1)){
        r=m=1;   // Line 153
        k.KIO(2,this.s_LtrsWithNasal_15,1,t);
        k.KO(-1,t,"̃̄");
      }
      else if(k.KA(0,k.KC(1,1,t),this.s_LtrsWithNasal_15)){
        r=m=1;   // Line 146
        k.KO(-1,t,"̃");
      }
      else if(k.KCM(1,t,"̃",1)){
        r=m=1;   // Line 147
        k.KO(1,t,"");
      }
      else if(1){
        r=m=1;   // Line 196
        k.KO(0,t,"~");
      }
    }
    else if(k.KKM(e, 0x4050, 0xC0)) {
      if(1){
        r=m=1;   // Line 191
        k.KO(0,t,"~");
      }
    }
    return r;
  };
  this.g_changeShapeRules2_1=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0xBA)) {
      if(k.KA(0,k.KC(1,1,t),this.s_LtrsCURRENT_12)){
        r=m=1;   // Line 215
        k.KIO(1,this.s_LtrsCHANGED_13,1,t);
        k.KO(-1,t,"̱");
        this.s_changeshape_31=this.s49;
      }
    }
    return r;
  };
  this.g_changeShapeRules_2=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0xBA)) {
      if(k.KA(0,k.KC(1,1,t),this.s_LtrsCURRENT_12)){
        r=m=1;   // Line 218
        k.KIO(1,this.s_LtrsCHANGED_13,1,t);
        this.s_changeshape_31=this.s50;
      }
    }
    return r;
  };
  this.g_changeShapeRules2_3=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0xBA)) {
      if(k.KA(0,k.KC(1,1,t),this.s_LtrsCURRENT_12)){
        r=m=1;   // Line 221
        k.KIO(1,this.s_LtrsCHANGED_13,1,t);
        k.KO(-1,t,"̱");
        this.s_changeshape_31=this.s51;
      }
    }
    return r;
  };
  this.g_underlineRules_4=function(t,e) {
    var k=KeymanWeb,r=0,m=0;
    if(k.KKM(e, 0x4000, 0xBA)) {
      if(k.KA(0,k.KC(1,1,t),this.s_LtrsCURRENT_12)){
        r=m=1;   // Line 224
        k.KO(-1,t,"̱");
        this.s_changeshape_31=this.s52;
      }
    }
    return r;
  };
}
