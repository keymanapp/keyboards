<?php
  $pagename = 'SMSC Dakota Keyboard Help';
  $pagetitle = $pagename;
  $pagestyle = <<<END
        .note {
            font-style: italic;
            color: gray;
        }
        .exampleGood {
            font-family: "Tahoma", Tahoma, monospace;
            background-color: #f9f9f9;
            padding: 5px;
            border-left: 3px solid #ccc;
        }
        .exampleDistort {
            font-family: "Arial", Arial, monospace;
            background-color: #f9f9f9;
            padding: 5px;
            border-left: 3px solid #ccc;
        }
        .picture {
            display: flex;
            justify-content: left;
            gap: 10px;
            margin-top: 10px;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
    END;
require_once('header.php');
?>

    <p>
        The Dakota SMSC keyboard has been developed by the Shakopee Mdewakanton Sioux Community for use by all speakers of this dialect.
    </p>
    <h2>Dakota Letters</h2>

    <table>
        <tr>
            <td>-</td>
            <td>-</td>
            <td>é/É</td>
            <td>-</td>
            <td>ṫ/Ṫ</td>
            <td>-</td>
            <td>ú/Ú</td>
            <td>í/Í</td>
            <td>ó/Ó</td>
            <td>ṗ/Ṗ</td>
        </tr>
        <tr>
            <td>á/Á</td>
            <td>ṡ/Ṡ</td>
            <td>-</td>
            <td>-</td>
            <td>ġ/Ġ</td>
            <td>ḣ/Ḣ</td>
            <td>-</td>
            <td>k̇/K̇</td>
            <td>-</td>
            <td>-</td>
        </tr>
        <tr>
            <td>ż/Ż</td>
            <td>-</td>
            <td>ċ/Ċ</td>
            <td>-</td>
            <td>-</td>
            <td>-</td>
            <td>ŋ/Ŋ</td>
            <td>-</td>
            <td><bold>'</bold></td>
            <td>-</td>
        </tr>
    </table>


    <h2>1. Mobile Devices:</h2>
    <ul>
        <li>There are 2 options to use the letters with diacritical marks:
            <ul>
                <li>
                    <strong>Option A:</strong> Unlike the desktop keyboard, additional letters are produced by holding down (long hold) keys. Press and hold any key with the dot in the upper right corner (indicated below with the green arrows), and after a moment, a submenu will appear. Continue holding the key and slide to the submenu to select a key. Release, and the selected key from the submenu is output.
                    <div class="picture">
                        <img src="./Picture1.png" alt="Mobile Keyboard" style="width: 150px; height: auto;">
                        <img src="./Picture2.png" alt="Mobile Keyboard" style="width: 150px; height: auto;">
                    </div>
                </li>
                <li>
                    <strong>Option B:</strong> Use the diacritical mark keys:
                    <ul>
                        <li>
                            <strong>Overdot ◌̇:</strong> Key is located to the left of the a/A key.
                            <div class="example">k + ◌̇ -> k̇<br>Shift + K + ◌̇ -> K̇</div>
                            <div class="picture">
                                <img src="./Overdot.png" alt="Mobile Keyboard" style="width: 150px; height: auto;">
                            </div>
                        </li>
                        <li>
                            <strong>Accent ◌́:</strong> Key is located to the right of the l/L key.
                            <div class="example">a + ◌́ -> á<br>Shift + A + ◌́ -> Á</div>
                            <div class="picture">
                                <img src="./accent.png" alt="Mobile Keyboard" style="width: 150px; height: auto;">
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li>
            <strong>ŋ/Ŋ:</strong> Keys have been added to the right of the m/M keys.
            <div class="picture">
                <img src="./n.png" alt="Mobile Keyboard" style="width: 150px; height: auto;">
            </div>
        </li>
        <li>
            <strong>Globe icon:</strong> Represents the "language input switch," allowing you to switch between different keyboard layouts depending on your settings.
            <div class="picture">
                <img src="./globe.png" alt="Mobile Keyboard" style="width: 150px; height: auto;">
            </div>
        </li>
        <li>
            <strong>Emoji button:</strong> Navigates to a limited list of emojis. For the full list of emojis use the globe icon to return to the default keyboard.
            <div class="picture">
                <img src="./emoji.png" alt="Mobile Keyboard" style="width: 150px; height: auto;">
            </div>
        </li>
    </ul>

    <h2>2. Windows/PCs:</h2>
    <ul>
        <li>
            <strong>Lower Case:</strong>
            <div class="picture">
                <img src="./lowercasepc.png" alt="Mobile Keyboard" style="width: 500px; height: auto;">
            </div>
        </li>
        <li>
            <strong>Upper Case (Caps):</strong>
            <div class="picture">
                <img src="./uppercasepc.png" alt="Mobile Keyboard" style="width: 500px; height: auto;">
            </div>
        </li>
        <li>
            <strong>Diacritical Marks:</strong>
            <ul>
                <li>
                    <strong>Overdot ◌̇:</strong> Replaces the ` key in the upper left corner. Available only on the lower-case letter screen.
                    <div class="example">k + ` -> k̇<br>Shift + K + ` -> K̇</div>
                    <div class="picture">
                        <img src="./overdotpc.png" alt="Mobile Keyboard" style="width: 200px; height: auto;">
                    </div>
                </li>
                <li>
                    <strong>Accent ◌́:</strong> Replaces the = key in the upper right corner. Available only on the lower-case letter screen.
                    <div class="example">a + = -> á<br>Shift + A + = -> Á</div>
                    <div class="picture">
                        <img src="./accentpc.png" alt="Mobile Keyboard" style="width: 200px; height: auto;">
                    </div>
                </li>
            </ul>
        </li>
        <li>
            <strong>ŋ/Ŋ:</strong> Replaces the \| key on the right side of the keyboard.
            <div class="picture">
                <img src="./nleft.png" alt="Mobile Keyboard" style="width: 200px; height: auto;">
                <img src="./nright.png" alt="Mobile Keyboard" style="width: 200px; height: auto;">
            </div>
        </li>
        <li>
            <strong>Shift/Uppercase Screen:</strong>
            <ul>
                <li>` is replaced by ~</li>
                <li>^ is replaced by =</li>
                <li>The \, |, `, and ^ characters are not available on the Windows keyboard.</li>
            </ul>
            <div class="picture">
                <img src="./tilde.png" alt="Mobile Keyboard" style="width: 150px; height: auto;">
                <img src="./equal.png" alt="Mobile Keyboard" style="width: 150px; height: auto;">
            </div>
        </li>
        <li>
            <strong>Fonts:</strong>
            <div class="picture">
                <img src="./CorrectFont.png" alt="Mobile Keyboard" style="width: 1000px; height: 100px;">
            </div>
        </li>
        <li>
            <strong>Emoji:</strong> Always accessible in Windows using shortcuts. Press the Esc key to exit.
            <div class="picture">
                <img src="./windowsshortcut.png" alt="Mobile Keyboard" style="width: 500px; height: auto;">
            </div>
        </li>
    </ul>
