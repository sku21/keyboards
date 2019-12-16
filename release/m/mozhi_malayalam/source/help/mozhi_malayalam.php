<?php
  $pagename = 'Mozhi Malayalam Keyboard Help';
  $pagetitle = 'Mozhi Malayalam Keyboard Help';
  $pagestyle = <<<END
    .lang2,.languageExample {font-family:AnjaliOldLipi;}
    .lang2 {font-size:150%}
    table td{width: 180px;text-align: center;}
    table{SIL Hebrewbackground: #e3e3e3;}
    .col1 {width: 100px;}
    .col2, .col3 {width: 150px;}
    .col4 {width: 350px;}
END;
  require_once('header.php');
?>
    <title>Mozhi Malayalam Keyman Keyboard</title>
    <style>
        html,
        body {
            font-family: sans-serif;
            font-size: 100%;
        }

        samp {
            font-family: sans-serif;
            font-size: 20pt;

        }

        kbd {
            color: black;
            font: 0.8em sans-serif;
            border: solid 1px grey;
            background: #ccc;
            margin: 2px 1px;
            padding: 2px 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
        }


        /* Table */
        .inputSequences {
            border-collapse: collapse;
            font-size: 14px;
            min-width: 592px;
        }

        .inputSequences th,
        .inputSequences td {
            padding: 7px 17px;
        }

        /* .inputSequences caption {
            margin: 7px;
        } */

        /* Table Header */
        .inputSequences thead th {
            border-bottom: 2px solid #6ea1cc;
            text-transform: uppercase;
        }

        /* Table Body */
        .inputSequences tbody td {
            border-bottom: 1px solid #e1edff;
            color: #353535;
            text-align: center;
        }

        .inputSequences tbody tr:nth-child(odd) td {
            background-color: #f4fbff;
        }

        /* 
        .inputSequences tbody td:nth-child(4),
        .inputSequences tbody td:first-child,
        .inputSequences tbody td:last-child {
            text-align: right;
        }
        */
        .inputSequences tbody tr:hover td {
            background-color: #ffffa2;
            border-color: #ffff0f;
        }

        /* Table Footer */
        /* 
            .inputSequences tfoot th {
            border-top: 2px solid #6ea1cc;
            text-align: right;
        } 
        */
    </style>
</head>

<body>
    <h1>Mozhi Malayalam Keyman Keyboard</h1>

    <p>Mozhi Malayalam Keyboard. Transliteration scheme was originally developed for Varamozhi Application. It uses a
        unique English character sequence for each Malayalam letter.</p>

    <h2>Keyboard layout</h2>


    <img src="mozhi_layout.png"> </img>
    <img src="mozhi_malayalam.png"> </img>
    <div id="sites-canvas-main" class="sites-canvas-main">
        <div id="sites-canvas-main-content">
            <table xmlns="http://www.w3.org/1999/xhtml" cellspacing="0"
                class="sites-layout-name-one-column sites-layout-hbox">
                <tbody>
                    <tr>
                        <td class="sites-layout-tile sites-tile-name-content-1">
                            <div dir="ltr">
                                <p>
                                </p>
                                <div class="sites-embed-align-right-wrapping-on">
                                    <div class="sites-embed-border-off sites-embed" style="width:400px;">
                                        <div class="sites-embed-content sites-embed-type-toc">
                                            <div class="goog-toc sites-embed-toc-maxdepth-6">
                                                <p>Contents</p>
                                                <div dir="ltr">
                                                    <div class="sites-embed-align-right-wrapping-on">
                                                        <div class="sites-embed-border-off sites-embed"
                                                            style="width:400px;">
                                                            <div class="sites-embed-content sites-embed-type-toc">
                                                                <div class="goog-toc sites-embed-toc-maxdepth-6">
                                                                    <p>Contents</p>
                                                                    <ol class="goog-toc">
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Basic-mapping"><strong>1
                                                                                </strong>Basic mapping</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Semi-vowel-signs"><strong>2
                                                                                </strong>Semi-vowel signs</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Separate-two-words-without-space"><strong>3
                                                                                </strong>Separate two words without
                                                                                space</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Consonant-Cluster"><strong>4
                                                                                </strong>Consonant Cluster</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Chillus"><strong>5
                                                                                </strong>Chillus</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Chillu-or-conjunct"><strong>6
                                                                                </strong>Chillu or conjunct</a>
                                                                            <ol class="goog-toc">
                                                                                <li class="goog-toc"><a
                                                                                        href="#TOC-Exceptions"><strong>6.1
                                                                                        </strong>Exceptions</a></li>
                                                                            </ol>
                                                                        </li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Explicit-Chandrakkala-instead-of-Chillu"><strong>7
                                                                                </strong>Explicit Chandrakkala instead
                                                                                of Chillu</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Stand-alone-combining-marks"><strong>8
                                                                                </strong>Stand-alone combining marks</a>
                                                                        </li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Doubling-of-NYA-"><strong>9
                                                                                </strong>Doubling of ഞ (NYA)</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Shortcuts-for-conjuncts"><strong>10
                                                                                </strong>Shortcuts for conjuncts</a>
                                                                        </li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Error-correction-in-conjuncts"><strong>11
                                                                                </strong>Error correction in
                                                                                conjuncts</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Mapping-for-unmapped-keys"><strong>12
                                                                                </strong>Mapping for unmapped keys</a>
                                                                        </li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Extra-elongation-for-vowel-signs"><strong>13
                                                                                </strong>Extra elongation for vowel
                                                                                signs</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Archaic-letters"><strong>14
                                                                                </strong>Archaic letters</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Joiners"><strong>15
                                                                                </strong>Joiners</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Escape-by-word"><strong>16
                                                                                </strong>Escape by word</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Compatibility-mapping"><strong>17
                                                                                </strong>Compatibility mapping</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Legacy-encoding"><strong>18
                                                                                </strong>Legacy encoding</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Backspace"><strong>19
                                                                                </strong>Backspace</a></li>
                                                                        <li class="goog-toc"><a
                                                                                href="#TOC-Convenience-Mapping-and-Emoji"><strong>20
                                                                                </strong>Convenience Mapping and
                                                                                Emoji</a></li>
                                                                    </ol>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h2><a name="TOC-Basic-mapping"></a>Basic mapping</h2>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:47px;height:31px">Mozhi</td>
                                                                <td style="width:72px;height:31px">Malayalam<br>
                                                                </td>
                                                                <td style="width:83px;height:31px">Unicode Name<br>
                                                                </td>
                                                                <td style="width:62px;height:31px">&nbsp;Example</td>
                                                                <td style="width:92px;height:31px">
                                                                    &nbsp;Example<br>&nbsp;in Mozhi</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:47px;height:17px">&nbsp;a</td>
                                                                <td style="width:72px;height:17px">&nbsp;അ</td>
                                                                <td style="width:83px;height:17px">&nbsp;A</td>
                                                                <td style="width:62px;height:17px">&nbsp;അല</td>
                                                                <td style="width:92px;height:17px">&nbsp;ala</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:47px;height:17px">&nbsp;aa</td>
                                                                <td style="width:72px;height:17px">&nbsp;ആ</td>
                                                                <td style="width:83px;height:17px">&nbsp;AA</td>
                                                                <td style="width:62px;height:17px">&nbsp;ആല</td>
                                                                <td style="width:92px;height:17px">&nbsp;aala</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:47px;height:17px">&nbsp;i</td>
                                                                <td style="width:72px;height:17px">&nbsp;ഇ</td>
                                                                <td style="width:83px;height:17px">&nbsp;I</td>
                                                                <td style="width:62px;height:17px">&nbsp;ഇല</td>
                                                                <td style="width:92px;height:17px">&nbsp;ila&nbsp;</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:47px;height:17px">&nbsp;ii</td>
                                                                <td style="width:72px;height:17px">&nbsp;ഈ</td>
                                                                <td style="width:83px;height:17px">&nbsp;II</td>
                                                                <td style="width:62px;height:17px">&nbsp;ഈറ</td>
                                                                <td style="width:92px;height:17px">&nbsp;iirra</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:47px;height:17px">&nbsp;u</td>
                                                                <td style="width:72px;height:17px">&nbsp;ഉ</td>
                                                                <td style="width:83px;height:17px">&nbsp;U<br>
                                                                </td>
                                                                <td style="width:62px;height:17px">&nbsp;ഉമ</td>
                                                                <td style="width:92px;height:17px">&nbsp;uma</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:47px;height:17px">&nbsp;uu</td>
                                                                <td style="width:72px;height:17px">&nbsp;ഊ</td>
                                                                <td style="width:83px;height:17px">&nbsp;UU</td>
                                                                <td style="width:62px;height:17px">&nbsp;ഊമ</td>
                                                                <td style="width:92px;height:17px">&nbsp;uuma</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:47px;height:17px">&nbsp;R</td>
                                                                <td style="width:72px;height:17px">&nbsp;ഋ</td>
                                                                <td style="width:83px;height:17px">&nbsp;VOCALIC R<br>
                                                                </td>
                                                                <td style="width:62px;height:17px">&nbsp;ഋതു</td>
                                                                <td style="width:92px;height:17px">&nbsp;Rthu</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:47px;height:31px">&nbsp;RR</td>
                                                                <td style="width:72px;height:31px">&nbsp;ൠ</td>
                                                                <td style="width:83px;height:31px">&nbsp;VOCALIC RR</td>
                                                                <td style="width:62px;height:31px">&nbsp;ൠന്ന്</td>
                                                                <td style="width:92px;height:31px">&nbsp;RRnn</td>
                                                            </tr>
                                                        </tbody>
                                                    </table><br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:39px;height:17px">&nbsp;e</td>
                                                                <td style="width:69px;height:17px">&nbsp;എ<br>
                                                                </td>
                                                                <td style="width:82px;height:17px">&nbsp;E<br>
                                                                </td>
                                                                <td style="width:67px;height:17px">&nbsp;എലി</td>
                                                                <td style="width:97px;height:17px">&nbsp;eli</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:39px;height:17px">&nbsp;E<br></td>
                                                                <td style="width:69px;height:17px">&nbsp;ഏ</td>
                                                                <td style="width:82px;height:17px">&nbsp;EE</td>
                                                                <td style="width:67px;height:17px">&nbsp;ഏലം</td>
                                                                <td style="width:97px;height:17px">&nbsp;Elam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:39px;height:17px">&nbsp;ai</td>
                                                                <td style="width:69px;height:17px">&nbsp;ഐ</td>
                                                                <td style="width:82px;height:17px">&nbsp;AI</td>
                                                                <td style="width:67px;height:17px">&nbsp;ഐക്യം</td>
                                                                <td style="width:97px;height:17px">&nbsp;aikyam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:39px;height:17px">&nbsp;o</td>
                                                                <td style="width:69px;height:17px">&nbsp;ഒ</td>
                                                                <td style="width:82px;height:17px">&nbsp;O</td>
                                                                <td style="width:67px;height:17px">&nbsp;ഒരു</td>
                                                                <td style="width:97px;height:17px">&nbsp;oru</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:39px;height:17px">&nbsp;O</td>
                                                                <td style="width:69px;height:17px">&nbsp;ഓ</td>
                                                                <td style="width:82px;height:17px">&nbsp;OO</td>
                                                                <td style="width:67px;height:17px">&nbsp;ഓരം</td>
                                                                <td style="width:97px;height:17px">&nbsp;Oram</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:39px;height:17px">&nbsp;au</td>
                                                                <td style="width:69px;height:17px">&nbsp;ഔ</td>
                                                                <td style="width:82px;height:17px">&nbsp;AU<br>
                                                                </td>
                                                                <td style="width:67px;height:17px">&nbsp;ഔഷധം</td>
                                                                <td style="width:97px;height:17px">&nbsp;aushadham</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:58px;height:19px">&nbsp;H</td>
                                                                <td style="width:68px;height:19px">&nbsp;ഃ</td>
                                                                <td style="width:80px;height:19px">&nbsp;VISARGA</td>
                                                                <td style="width:58px;height:19px">&nbsp;ദുഃഖം</td>
                                                                <td style="width:91px;height:19px">&nbsp;duHkham</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td>&nbsp;ka</td>
                                                                <td>&nbsp;ക<br>
                                                                </td>
                                                                <td>&nbsp;KA<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;കല</td>
                                                                <td style="width:60px">&nbsp;kala</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;kha<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ഖ</td>
                                                                <td style="width:60px">&nbsp;KHA</td>
                                                                <td style="width:60px">&nbsp;നഖം</td>
                                                                <td style="width:60px">&nbsp;nakham</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;ga</td>
                                                                <td style="width:60px">&nbsp;ഗ</td>
                                                                <td style="width:60px">&nbsp;GA</td>
                                                                <td style="width:60px">&nbsp;ഗരം</td>
                                                                <td style="width:60px">&nbsp;garam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;gha</td>
                                                                <td style="width:60px">&nbsp;ഘ</td>
                                                                <td style="width:60px">&nbsp;GHA</td>
                                                                <td style="width:60px">&nbsp;മേഘം</td>
                                                                <td style="width:60px">&nbsp;mEgham</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;nga</td>
                                                                <td style="width:60px">&nbsp;ങ</td>
                                                                <td style="width:60px">&nbsp;NGA</td>
                                                                <td style="width:60px">&nbsp;ങ്യാവൂ</td>
                                                                <td style="width:60px">&nbsp;ngyaavuu</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-top-color:rgb(136,136,136);border-right-color:rgb(136,136,136);border-bottom-color:rgb(136,136,136);border-left-color:rgb(136,136,136);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:61px;height:17px">&nbsp;cha</td>
                                                                <td style="width:55px;height:17px">&nbsp;ച<br>
                                                                </td>
                                                                <td style="width:52px;height:17px">&nbsp;CA<br>
                                                                </td>
                                                                <td style="width:66px;height:17px">&nbsp;ചരം</td>
                                                                <td style="width:75px;height:17px">&nbsp;charam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:61px;height:17px">&nbsp;chha<br>
                                                                </td>
                                                                <td style="width:55px;height:17px">&nbsp;ഛ</td>
                                                                <td style="width:52px;height:17px">&nbsp;CHA</td>
                                                                <td style="width:66px;height:17px">&nbsp;ഛായ</td>
                                                                <td style="width:75px;height:17px">&nbsp;chhaaya</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:61px;height:17px">&nbsp;ja</td>
                                                                <td style="width:55px;height:17px">&nbsp;ജ</td>
                                                                <td style="width:52px;height:17px">&nbsp;JA</td>
                                                                <td style="width:66px;height:17px">&nbsp;ജലം</td>
                                                                <td style="width:75px;height:17px">&nbsp;jalam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:61px;height:17px">&nbsp;jha</td>
                                                                <td style="width:55px;height:17px">&nbsp;ഝ</td>
                                                                <td style="width:52px;height:17px">&nbsp;JHA</td>
                                                                <td style="width:66px;height:17px">&nbsp;ഝാൻസി</td>
                                                                <td style="width:75px;height:17px">&nbsp;jhaansi</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:61px;height:17px">&nbsp;nja</td>
                                                                <td style="width:55px;height:17px">&nbsp;ഞ</td>
                                                                <td style="width:52px;height:17px">&nbsp;NYA</td>
                                                                <td style="width:66px;height:17px">&nbsp;ഞാൻ</td>
                                                                <td style="width:75px;height:17px">&nbsp;njaan</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td>&nbsp;Ta</td>
                                                                <td>&nbsp;ട<br>
                                                                </td>
                                                                <td>&nbsp;TTA<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ടിപ്പു</td>
                                                                <td style="width:60px">&nbsp;Tippu</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;Tha<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ഠ<br></td>
                                                                <td style="width:60px">&nbsp;TTHA</td>
                                                                <td style="width:60px">&nbsp;പാഠം</td>
                                                                <td style="width:60px">&nbsp;paaTham</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;Da</td>
                                                                <td style="width:60px">&nbsp;ഡ</td>
                                                                <td style="width:60px">&nbsp;DDA</td>
                                                                <td style="width:60px">&nbsp;ഡപ്പി</td>
                                                                <td style="width:60px">&nbsp;Dappi</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;Dha</td>
                                                                <td style="width:60px">&nbsp;ഢ </td>
                                                                <td style="width:60px">&nbsp;DDHA</td>
                                                                <td style="width:60px">&nbsp;ദൃഢം</td>
                                                                <td style="width:60px">&nbsp;dRDham</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;Na</td>
                                                                <td style="width:60px">&nbsp;ണ</td>
                                                                <td style="width:60px">&nbsp;NNA</td>
                                                                <td style="width:60px">&nbsp;മണം</td>
                                                                <td style="width:60px">&nbsp;maNam</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td>&nbsp;tha</td>
                                                                <td>&nbsp;ത<br>
                                                                </td>
                                                                <td>&nbsp;TA<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;തത്ത</td>
                                                                <td style="width:60px">&nbsp;thaththa</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;thha<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ഥ</td>
                                                                <td style="width:60px">&nbsp;THA</td>
                                                                <td style="width:60px">&nbsp;കഥ</td>
                                                                <td style="width:60px">&nbsp;kathha</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;da</td>
                                                                <td style="width:60px">&nbsp;ദ</td>
                                                                <td style="width:60px">&nbsp;DA</td>
                                                                <td style="width:60px">&nbsp;ദയ</td>
                                                                <td style="width:60px">&nbsp;daya</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;dha</td>
                                                                <td style="width:60px">&nbsp;ധ</td>
                                                                <td style="width:60px">&nbsp;DHA</td>
                                                                <td style="width:60px">&nbsp;ധനം</td>
                                                                <td style="width:60px">&nbsp;dhanam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;na</td>
                                                                <td style="width:60px">&nbsp;ന</td>
                                                                <td style="width:60px">&nbsp;NA</td>
                                                                <td style="width:60px">&nbsp;നന്ന്</td>
                                                                <td style="width:60px">&nbsp;nann~</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td>&nbsp;pa</td>
                                                                <td>&nbsp;പ<br>
                                                                </td>
                                                                <td>&nbsp;PA<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;പല</td>
                                                                <td style="width:60px">&nbsp;pala</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;pha<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ഫ</td>
                                                                <td style="width:60px">&nbsp;PHA</td>
                                                                <td style="width:60px">&nbsp;ഫലം</td>
                                                                <td style="width:60px">&nbsp;phalam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;ba</td>
                                                                <td style="width:60px">&nbsp;ബ</td>
                                                                <td style="width:60px">&nbsp;BA</td>
                                                                <td style="width:60px">&nbsp;ബലം</td>
                                                                <td style="width:60px">&nbsp;balam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;bha</td>
                                                                <td style="width:60px">&nbsp;ഭ</td>
                                                                <td style="width:60px">&nbsp;BHA</td>
                                                                <td style="width:60px">&nbsp;ഭയം</td>
                                                                <td style="width:60px">&nbsp;bhayam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;ma</td>
                                                                <td style="width:60px">&nbsp;മ</td>
                                                                <td style="width:60px">&nbsp;MA</td>
                                                                <td style="width:60px">&nbsp;മയം</td>
                                                                <td style="width:60px">&nbsp;mayam</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td>&nbsp;ya</td>
                                                                <td>&nbsp;യ<br>
                                                                </td>
                                                                <td>&nbsp;YA<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;യതി</td>
                                                                <td style="width:60px">&nbsp;yathi</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;ra<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ര</td>
                                                                <td style="width:60px">&nbsp;RA</td>
                                                                <td style="width:60px">&nbsp;രണ്ട്</td>
                                                                <td style="width:60px">&nbsp;raNT</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;la</td>
                                                                <td style="width:60px">&nbsp;ല</td>
                                                                <td style="width:60px">&nbsp;LA</td>
                                                                <td style="width:60px">&nbsp;ലത</td>
                                                                <td style="width:60px">&nbsp;latha</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;va</td>
                                                                <td style="width:60px">&nbsp;വ</td>
                                                                <td style="width:60px">&nbsp;VA</td>
                                                                <td style="width:60px">&nbsp;വരം</td>
                                                                <td style="width:60px">&nbsp;varam</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td>&nbsp;Sa</td>
                                                                <td>&nbsp;ശ<br>
                                                                </td>
                                                                <td>&nbsp;SHA<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ശരം</td>
                                                                <td style="width:60px">&nbsp;Saram</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;sha<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ഷ</td>
                                                                <td style="width:60px">&nbsp;SSA</td>
                                                                <td style="width:60px">&nbsp;ഷാരം</td>
                                                                <td style="width:60px">&nbsp;shaaram</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;sa</td>
                                                                <td style="width:60px">&nbsp;സ</td>
                                                                <td style="width:60px">&nbsp;SA</td>
                                                                <td style="width:60px">&nbsp;സാരം</td>
                                                                <td style="width:60px">&nbsp;saaram</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;ha</td>
                                                                <td style="width:60px">&nbsp;ഹ</td>
                                                                <td style="width:60px">&nbsp;HA</td>
                                                                <td style="width:60px">&nbsp;ഹാരം</td>
                                                                <td style="width:60px">&nbsp;haaram</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td>&nbsp;La</td>
                                                                <td>&nbsp;ള<br>
                                                                </td>
                                                                <td>&nbsp;LLA<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ഇള</td>
                                                                <td style="width:60px">&nbsp;iLa</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;zha<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;ഴ</td>
                                                                <td style="width:60px">&nbsp;LLLA</td>
                                                                <td style="width:60px">&nbsp;ഇഴ</td>
                                                                <td style="width:60px">&nbsp;izha</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px">&nbsp;rra</td>
                                                                <td style="width:60px">&nbsp;റ</td>
                                                                <td style="width:60px">&nbsp;RRA</td>
                                                                <td style="width:60px">&nbsp;പറ</td>
                                                                <td style="width:60px">&nbsp;parra</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:55px;height:17px">&nbsp;ta</td>
                                                                <td style="width:63px;height:17px">&nbsp;റ്റ</td>
                                                                <td style="width:163px;height:17px">&nbsp;RRA, VIRAMA,
                                                                    RRA<br></td>
                                                                <td style="width:62px;height:17px">പാറ്റ&nbsp;</td>
                                                                <td style="width:67px;height:17px">&nbsp;paata</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:54px;height:16px">&nbsp;$<br>
                                                                </td>
                                                                <td style="width:69px;height:16px">U+20B9<br></td>
                                                                <td style="width:169px;height:16px">&nbsp;INDIAN RUPEE
                                                                    SIGN <br></td>
                                                                <td style="width:60px">&nbsp;$100</td>
                                                                <td style="width:60px">&nbsp;₹100</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <h2><a name="TOC-Semi-vowel-signs"></a>Semi-vowel signs</h2>
                                                    Described by examples:<br><br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:60px;height:22px">&nbsp;sya<br></td>
                                                                <td style="width:60px;height:22px">&nbsp;സ്യ</td>
                                                                <td style="width:134px;height:22px">&nbsp;SA, VIRAMA,
                                                                    YA<br>
                                                                </td>
                                                                <td style="width:60px">&nbsp;സസ്യം</td>
                                                                <td style="width:60px">&nbsp;sasyam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px;height:22px">&nbsp;sra<br>
                                                                </td>
                                                                <td style="width:60px;height:22px">&nbsp;സ്ര </td>
                                                                <td style="width:134px;height:22px">&nbsp;SA, VIRAMA,
                                                                    RA<br></td>
                                                                <td style="width:60px">&nbsp;സ്രാവം</td>
                                                                <td style="width:60px">&nbsp;sraavam</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px;height:22px">&nbsp;sla</td>
                                                                <td style="width:60px;height:22px">&nbsp;സ്ല</td>
                                                                <td style="width:134px;height:22px">&nbsp;SA, VIRAMA, LA
                                                                </td>
                                                                <td style="width:60px">&nbsp;സ്ലാവിക്</td>
                                                                <td style="width:60px">&nbsp;slaavik</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px;height:22px">&nbsp;sLa</td>
                                                                <td style="width:60px;height:22px">&nbsp;സ്ള</td>
                                                                <td style="width:134px;height:22px">&nbsp;SA, VIRAMA,
                                                                    LLA</td>
                                                                <td style="width:60px">&nbsp;ബ്ളോഗ്</td>
                                                                <td style="width:60px">&nbsp;bLOg</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:60px;height:22px">&nbsp;sva</td>
                                                                <td style="width:60px;height:22px">&nbsp;സ്വ</td>
                                                                <td style="width:134px;height:22px">&nbsp;SA, VIRAMA, VA
                                                                </td>
                                                                <td style="width:60px">&nbsp;സ്വരം</td>
                                                                <td style="width:60px">&nbsp;svaram</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <h2><a name="TOC-Separate-two-words-without-space"></a>Separate two words
                                                            without space</h2>Use '_' (underscore) to start a new
                                                    sequence out of context from previously typed text. The same effect
                                                    can be achieved by typing a space instead and then later removing
                                                    it. This feature is useful for:<br>
                                                    <ul>
                                                        <li>Get chillu letter in contexts where it would otherwise form
                                                            a conjunct with the following consonant. Example: 'nna' for
                                                            ന്ന Vs 'n_na' for ൻന.</li>
                                                        <li>Get a full vowel in-between a word<br></li>
                                                    </ul>If just '_' alone is typed, then that will appear to the user
                                                    and will be consumed only when a valid letter is typed after
                                                    it.<br><br>
                                                    <table border="1" cellspacing="0"
                                                        style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:122px;height:16px">&nbsp;pon_</td>
                                                                <td style="width:112px;height:16px">&nbsp;പൊൻ_</td>
                                                                <td style="width:291px;height:16px">&nbsp;PA, SIGN O,
                                                                    CHILLU N, _<br></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:122px;height:16px">&nbsp;pon_naaNyam
                                                                </td>
                                                                <td style="width:112px;height:16px">
                                                                    &nbsp;പൊൻനാണ്യം&nbsp;</td>
                                                                <td style="width:291px;height:16px">&nbsp;PA, SIGN O,
                                                                    CHILLU N, NA, SIGN AA ... <br></td>
                                                            </tr>
                                                            <tr>
                                                                <td>&nbsp;m~adani</td>
                                                                <td>&nbsp;മ്അദനി</td>
                                                                <td>&nbsp;MA, VIRAMA, A, DA, NA, SIGNI<span
                                                                        style="font-size:10pt">&nbsp;</span></td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:122px;height:16px">&nbsp;in_ka</td>
                                                                <td style="width:112px;height:16px">&nbsp;ഇൻക <br></td>
                                                                <td style="width:291px;height:16px">&nbsp;I, CHILLU N,
                                                                    KA</td>
                                                            </tr>
                                                        </tbody>
                                                    </table><br>
                                                    <table border="1" cellspacing="0"
                                                        style="font-size:13.3333px;border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                        <tbody>
                                                            <tr>
                                                                <td style="width:113px;height:17px">&nbsp;n_~erra</td>
                                                                <td style="width:104px;height:17px">&nbsp;ൻെറ</td>
                                                                <td style="width:289px;height:17px">&nbsp;CHILLU-N, SIGN
                                                                    E, RRA</td>
                                                                <td style="width:169px;height:17px">&nbsp;എൻെറ</td>
                                                                <td style="width:65px;height:17px">&nbsp;en:~erra</td>
                                                            </tr>
                                                            <tr>
                                                                <td style="width:113px;height:21px">&nbsp;L_~ka</td>
                                                                <td style="width:104px;height:21px">&nbsp;ൾ്ക</td>
                                                                <td style="width:289px;height:21px">&nbsp;CHILLU-LL,
                                                                    VIRAMA, KA</td>
                                                                <td style="width:169px;height:21px">&nbsp;visual: ൾ,
                                                                    subscript ക</td>
                                                                <td style="width:65px;height:21px">&nbsp;L_~ka</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <h2><a name="TOC-Consonant-Cluster"></a>Consonant Cluster</h2>
                                                    <div>Consonant Cluster in a word is the sequence of English letters
                                                        representing more than one consonant. As an example, the word in
                                                        Mozhi, 'Sruthi' has the consonant cluster: 'Sr' - for consonants
                                                        'Sa' and 'ra'. This definition is used in sections below.<br>
                                                        <h2><a name="TOC-Chillus"></a>Chillus</h2>The letters N, n, m,
                                                        r, l or L at the beginning of a word or after a vowel will form
                                                        a chillu. Anusvara (ം) is considered a chillu.<br><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;svam<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;സ്വം <br>
                                                                    </td>
                                                                    <td style="width:243px;height:22px">&nbsp;SA,
                                                                        VIRAMA, VA, ANUSVARA <br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;avan<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;അവൻ</td>
                                                                    <td style="width:243px;height:22px">&nbsp;A, VA,
                                                                        CHILLU N<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Sr</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ശ്ര് <br>
                                                                    </td>
                                                                    <td style="width:243px;height:22px">&nbsp;SHA,
                                                                        VIRAMA, RA, VIRAMA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;n</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ൻ</td>
                                                                    <td style="width:243px;height:22px">&nbsp;CHILLU N
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;m</td>
                                                                    <td>&nbsp;ം</td>
                                                                    <td>&nbsp;ANUSVARA</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h2><a name="TOC-Chillu-or-conjunct"></a>Chillu or conjunct</h2>
                                                        A chillu-capable letter in a consonant cluster will not form a
                                                        chillu if that<span
                                                            style="background-color:transparent;font-size:10pt">&nbsp;cluster
                                                            starts with the following sequence. (Please ignore the
                                                            ending 'a' which is to show the cluster in its simplest
                                                            form):</span>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;NTa<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ണ്ട&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:22px">&nbsp;NNA,
                                                                        VIRAMA, TA<br></td>
                                                                    <td style="width:60px">&nbsp;മണ്ട</td>
                                                                    <td style="width:60px">&nbsp;maNTa</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;NTha</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ണ്ഠ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:22px">&nbsp;NNA,
                                                                        VIRAMA, THA</td>
                                                                    <td style="width:60px">&nbsp;കുണ്ഠിതം</td>
                                                                    <td style="width:60px">&nbsp;kuNThitham</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;NDa</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ണ്ഡ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:22px">&nbsp;NNA,
                                                                        VIRAMA, DDA</td>
                                                                    <td style="width:60px">&nbsp;പാണ്ഡു</td>
                                                                    <td style="width:60px">&nbsp;paaNDu</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;NDha</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ണ്ഢ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:22px">&nbsp;NNA,
                                                                        VIRAMA, DDHA</td>
                                                                    <td style="width:60px">&nbsp;കണ്ഢം</td>
                                                                    <td style="width:60px">&nbsp;kaNDham</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;NNa</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ണ്ണ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:22px">&nbsp;NNA,
                                                                        VIRAMA, NNA<br></td>
                                                                    <td style="width:60px">&nbsp;കണ്ണ്</td>
                                                                    <td style="width:60px">&nbsp;kaNN</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Nma<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ണ്മ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:22px">&nbsp;NNA,
                                                                        VIRAMA, MA<br></td>
                                                                    <td style="width:60px">&nbsp;വെണ്മ</td>
                                                                    <td style="width:60px">&nbsp;veNma</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Nya</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ണ്യ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:22px">&nbsp;NNA,
                                                                        VIRAMA, YA<br></td>
                                                                    <td style="width:60px">&nbsp;നാണ്യം</td>
                                                                    <td style="width:60px">&nbsp;naaNyam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Nva<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ണ്വ&nbsp;
                                                                        <br></td>
                                                                    <td style="width:172px;height:22px">&nbsp;NNA,
                                                                        VIRAMA, VA<br></td>
                                                                    <td style="width:60px">&nbsp;കണ്വൻ</td>
                                                                    <td style="width:60px">&nbsp;kaNvan</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:62px;height:17px">&nbsp;ntha<br>
                                                                    </td>
                                                                    <td style="width:50px;height:17px">&nbsp;ന്ത&nbsp;
                                                                    </td>
                                                                    <td style="width:173px;height:17px">&nbsp;NA,
                                                                        VIRAMA, TA</td>
                                                                    <td style="width:70px;height:17px">&nbsp;തന്ത</td>
                                                                    <td style="width:92px;height:17px">&nbsp;thantha
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:62px;height:17px">&nbsp;nthha<br>
                                                                    </td>
                                                                    <td style="width:50px;height:17px">&nbsp;ന്ഥ&nbsp;
                                                                    </td>
                                                                    <td style="width:173px;height:17px">&nbsp;NA,
                                                                        VIRAMA, THA<br></td>
                                                                    <td style="width:70px;height:17px">&nbsp;പാന്ഥൻ</td>
                                                                    <td style="width:92px;height:17px">&nbsp;paanthhan
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:62px;height:17px">&nbsp;nda</td>
                                                                    <td style="width:50px;height:17px">&nbsp;ന്ദ&nbsp;
                                                                    </td>
                                                                    <td style="width:173px;height:17px">&nbsp;NA,
                                                                        VIRAMA, DA<br></td>
                                                                    <td style="width:70px;height:17px">&nbsp;നന്ദി</td>
                                                                    <td style="width:92px;height:17px">&nbsp;nandi</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:62px;height:17px">&nbsp;ndha<br>
                                                                    </td>
                                                                    <td style="width:50px;height:17px">&nbsp;ന്ധ&nbsp;
                                                                    </td>
                                                                    <td style="width:173px;height:17px">&nbsp;NA,
                                                                        VIRAMA, DHA<br></td>
                                                                    <td style="width:70px;height:17px">&nbsp;അന്ധൻ</td>
                                                                    <td style="width:92px;height:17px">&nbsp;andhan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:62px;height:17px">&nbsp;nna</td>
                                                                    <td style="width:50px;height:17px">&nbsp;ന്ന&nbsp;
                                                                    </td>
                                                                    <td style="width:173px;height:17px">&nbsp;NA,
                                                                        VIRAMA, NA<br></td>
                                                                    <td style="width:70px;height:17px">&nbsp;പിന്നെ</td>
                                                                    <td style="width:92px;height:17px">&nbsp;pinne</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:62px;height:17px">&nbsp;nma</td>
                                                                    <td style="width:50px;height:17px">&nbsp;ന്മ&nbsp;
                                                                    </td>
                                                                    <td style="width:173px;height:17px">&nbsp;NA,
                                                                        VIRAMA, MA<br></td>
                                                                    <td style="width:70px;height:17px">&nbsp;നന്മ</td>
                                                                    <td style="width:92px;height:17px">&nbsp;nanma</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:62px;height:17px">&nbsp;nya</td>
                                                                    <td style="width:50px;height:17px">&nbsp;ന്യ&nbsp;
                                                                    </td>
                                                                    <td style="width:173px;height:17px">&nbsp;NA,
                                                                        VIRAMA, YA<br></td>
                                                                    <td style="width:70px;height:17px">&nbsp;അന്യം</td>
                                                                    <td style="width:92px;height:17px">&nbsp;anyam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:62px;height:17px">&nbsp;nra</td>
                                                                    <td style="width:50px;height:17px">&nbsp;ന്ര&nbsp;
                                                                    </td>
                                                                    <td style="width:173px;height:17px">&nbsp;NA,
                                                                        VIRAMA, RA<br></td>
                                                                    <td style="width:70px;height:17px">&nbsp;ന്രസ്ഥി
                                                                    </td>
                                                                    <td style="width:92px;height:17px">&nbsp;nrasthhi
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:62px;height:17px">&nbsp;nva</td>
                                                                    <td style="width:50px;height:17px">&nbsp;ന്വ&nbsp;
                                                                    </td>
                                                                    <td style="width:173px;height:17px">&nbsp;NA,
                                                                        VIRAMA, VA<br></td>
                                                                    <td style="width:70px;height:17px">&nbsp;അന്വയം</td>
                                                                    <td style="width:92px;height:17px">&nbsp;anvayam
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:63px;height:17px">&nbsp;mpa<br>
                                                                    </td>
                                                                    <td style="width:60px;height:17px">&nbsp;മ്പ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:17px">&nbsp;MA,
                                                                        VIRAMA, PA<br></td>
                                                                    <td style="width:59px;height:17px">&nbsp;കമ്പം</td>
                                                                    <td style="width:94px;height:17px">&nbsp;kampam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:63px;height:17px">&nbsp;mma<br>
                                                                    </td>
                                                                    <td style="width:60px;height:17px">&nbsp;മ്മ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:17px">&nbsp;MA,
                                                                        VIRAMA, MA<br></td>
                                                                    <td style="width:59px;height:17px">&nbsp;അമ്മ</td>
                                                                    <td style="width:94px;height:17px">&nbsp;amma</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:63px;height:17px">&nbsp;mya</td>
                                                                    <td style="width:60px;height:17px">&nbsp;മ്യ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:17px">&nbsp;MA,
                                                                        VIRAMA, YA<br></td>
                                                                    <td style="width:59px;height:17px">&nbsp;രമ്യം</td>
                                                                    <td style="width:94px;height:17px">&nbsp;ramyam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:63px;height:17px">&nbsp;mra<br>
                                                                    </td>
                                                                    <td style="width:60px;height:17px">&nbsp;മ്ര <br>
                                                                    </td>
                                                                    <td style="width:172px;height:17px">&nbsp;MA,
                                                                        VIRAMA, RA<br></td>
                                                                    <td style="width:59px;height:17px">&nbsp;കമ്രം</td>
                                                                    <td style="width:94px;height:17px">&nbsp;kamram</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:63px;height:17px">&nbsp;mla</td>
                                                                    <td style="width:60px;height:17px">&nbsp;മ്ല&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:17px">&nbsp;MA,
                                                                        VIRAMA, LA<br></td>
                                                                    <td style="width:59px;height:17px">&nbsp;അമ്ലം</td>
                                                                    <td style="width:94px;height:17px">&nbsp;amlam</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;rya<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ര്യ <br>
                                                                    </td>
                                                                    <td style="width:173px;height:22px">&nbsp;RA,
                                                                        VIRAMA, YA</td>
                                                                    <td style="width:60px">&nbsp;ഭാര്യ</td>
                                                                    <td style="width:60px">&nbsp;bhaarya</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td>&nbsp;lpa</td>
                                                                    <td>&nbsp;ല്പ <br></td>
                                                                    <td>&nbsp;LA, VIRAMA, PA<br></td>
                                                                    <td style="width:60px">&nbsp;അല്പം</td>
                                                                    <td style="width:60px">&nbsp;alpam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;lma</td>
                                                                    <td>&nbsp;ല്മ <br></td>
                                                                    <td>&nbsp;LA, VIRAMA, MA<br></td>
                                                                    <td style="width:60px">&nbsp;കല്മഷം</td>
                                                                    <td style="width:60px">&nbsp;kalmasham</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;lya<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ല്യ <br>
                                                                    </td>
                                                                    <td style="width:175px;height:22px">&nbsp;LA,
                                                                        VIRAMA, YA</td>
                                                                    <td style="width:60px">&nbsp;അഹല്യ</td>
                                                                    <td style="width:60px">&nbsp;ahalya</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;lva</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ല്വ&nbsp;
                                                                    </td>
                                                                    <td style="width:175px;height:22px">&nbsp;LA,
                                                                        VIRAMA, VA</td>
                                                                    <td style="width:60px">&nbsp;വില്വാദ്രി</td>
                                                                    <td style="width:60px">&nbsp;vilvaadri</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;lla</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ല്ല&nbsp;
                                                                    </td>
                                                                    <td style="width:175px;height:22px">&nbsp;LA,
                                                                        VIRAMA, LA</td>
                                                                    <td style="width:60px">&nbsp;ഇല്ല</td>
                                                                    <td style="width:60px">&nbsp;illa</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Lya<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ള്യ <br>
                                                                    </td>
                                                                    <td style="width:176px;height:22px">&nbsp;LLA,
                                                                        VIRAMA, YA</td>
                                                                    <td style="width:60px">&nbsp;ജാള്യം</td>
                                                                    <td style="width:60px">&nbsp;jaaLyam</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;LLa</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ള്ള&nbsp;
                                                                    </td>
                                                                    <td style="width:176px;height:22px">&nbsp;LLA,
                                                                        VIRAMA, LLA</td>
                                                                    <td style="width:60px">&nbsp;ഉള്ള</td>
                                                                    <td style="width:60px">&nbsp;uLLa</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>Following examples are for more than two consonants in a
                                                        consonant cluster.<br><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-top-color:rgb(136,136,136);border-right-color:rgb(136,136,136);border-bottom-color:rgb(136,136,136);border-left-color:rgb(136,136,136);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:63px;height:28px">&nbsp;..NDya<br>
                                                                    </td>
                                                                    <td style="width:48px;height:28px">&nbsp;ണ്ഡ്യ<br>
                                                                    </td>
                                                                    <td style="width:305px;height:28px">&nbsp;NNA,
                                                                        VIRAMA, DDA, VIRAMA, YA</td>
                                                                    <td style="width:79px;height:28px">&nbsp;പാണ്ഡ്യൻ
                                                                    </td>
                                                                    <td style="width:60px">&nbsp;paaNDyan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:63px;height:30px">&nbsp;..nthrya
                                                                    </td>
                                                                    <td style="width:48px;height:30px">&nbsp;ന്ത്ര്യ<br>
                                                                    </td>
                                                                    <td style="width:305px;height:30px">&nbsp;NA,
                                                                        VIRAMA, TA, VIRAMA, RA, VIRAMA, YA<br></td>
                                                                    <td style="width:79px;height:30px">
                                                                        &nbsp;സ്വാതന്ത്ര്യം</td>
                                                                    <td style="width:60px">&nbsp;svaathanthryam</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h3><a name="TOC-Exceptions"></a>Exceptions</h3>If a consonant
                                                        cluster starts as &lt;chill-capable consonant A&gt;&lt;consonant
                                                        B&gt;&lt;consonant B&gt; then consonant A will form chillu.
                                                        Example:<br><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;alppam<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;അൽപ്പം<br>
                                                                    </td>
                                                                    <td style="width:306px;height:22px">&nbsp;A, CHILLU
                                                                        L, PA, VIRAMA, PA, ANUSVARA<br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>The 'മ്യ' and 'മ്ര' conjuncts are not formed if they follow
                                                        'സം'. Example:<br><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:96px;height:16px">
                                                                        &nbsp;samyOgam<br>
                                                                    </td>
                                                                    <td style="width:73px;height:16px">&nbsp;സംയോഗം<br>
                                                                    </td>
                                                                    <td style="width:254px;height:16px">&nbsp;SA,
                                                                        ANUSVARA, YA, SIGN OO, ...<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:96px;height:18px">&nbsp;samrambham
                                                                    </td>
                                                                    <td style="width:73px;height:18px">&nbsp;സംരംഭം</td>
                                                                    <td style="width:254px;height:18px">&nbsp;SA,
                                                                        ANUSVARA, RA, ANUSVARA, ...</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>If 'മ്യ' and 'മ്ര' conjunct are required after&nbsp;<span
                                                                style="font-size:13.3333px;background-color:transparent">'സ'</span><span
                                                                style="background-color:transparent;font-size:10pt">,
                                                                then please use '_' to make it the word initial
                                                                consonant cluster. Examples:</span></p>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:92px;height:15px">&nbsp;sa_myak<br>
                                                                    </td>
                                                                    <td style="width:73px;height:15px">&nbsp;സമ്യക്<br>
                                                                    </td>
                                                                    <td style="width:262px;height:15px">&nbsp;SA, MA,
                                                                        VIRAMA, YA, ...<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:92px;height:24px">&nbsp;sa_mraaTT
                                                                    </td>
                                                                    <td style="width:73px;height:24px">&nbsp;സമ്രാട്ട്
                                                                    </td>
                                                                    <td style="width:262px;height:24px">&nbsp;SA, MA,
                                                                        VIRAMA, RA, SIGN AA, ...</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>While writing '<span style="font-size:13.3333px">ൻ്റ'
                                                            conjunct by 'nt..' sequence, 'n' will produce Chillu-N as
                                                            follows:</span><br><br>
                                                        <table border="1" cellspacing="0"
                                                            style="font-size:13.3333px;border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:54px;height:30px">&nbsp;nta</td>
                                                                    <td style="width:54px;height:30px">&nbsp;ൻ്റ</td>
                                                                    <td style="width:196px;height:30px">&nbsp;CHILLU-N,
                                                                        VIRAMA, RRA</td>
                                                                    <td style="width:73px;height:30px">&nbsp;എൻ്റെ</td>
                                                                    <td style="width:70px;height:30px">&nbsp;ente</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:54px;height:17px">&nbsp;nrra</td>
                                                                    <td style="width:54px;height:17px">&nbsp;ൻറ</td>
                                                                    <td style="width:196px;height:17px">&nbsp;CHILLU N,
                                                                        RRA</td>
                                                                    <td style="width:73px;height:17px">&nbsp;എൻറോൾ</td>
                                                                    <td style="width:70px;height:17px">&nbsp;enrrOL</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h2><a
                                                                name="TOC-Explicit-Chandrakkala-instead-of-Chillu"></a>Explicit
                                                                Chandrakkala instead of Chillu</span></h2>To get
                                                        chandrakkala instead of a chillu or after U-sign use '~'
                                                        (tilda). If '~' is placed between two consonants, it would use a
                                                        ZWNJ to produce virama explicit.<br><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:92px;height:17px">&nbsp;avan~<br>
                                                                    </td>
                                                                    <td style="width:74px;height:17px">&nbsp;അവന്<br>
                                                                    </td>
                                                                    <td style="width:359px;height:17px">&nbsp;..., NA,
                                                                        VIRAMA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:92px;height:17px">&nbsp;avanu~</td>
                                                                    <td style="width:74px;height:17px">&nbsp;അവനു്</td>
                                                                    <td style="width:359px;height:17px">&nbsp;..., NA,
                                                                        SIGN U, VIRAMA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:92px;height:17px">&nbsp;vaalmeeki
                                                                    </td>
                                                                    <td style="width:74px;height:17px">&nbsp;വാല്മീകി
                                                                        &nbsp;</td>
                                                                    <td style="width:359px;height:17px">&nbsp;..., LA,
                                                                        VIRAMA, MA, ... &nbsp;<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:92px;height:17px">&nbsp;vaal_meeki
                                                                    </td>
                                                                    <td style="width:74px;height:17px">
                                                                        &nbsp;വാൽമീകി&nbsp;</td>
                                                                    <td style="width:359px;height:17px">&nbsp;...,
                                                                        CHILLU L, MA, ...<span
                                                                            style="font-size:10pt">&nbsp;&nbsp;</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:92px;height:17px">&nbsp;vaal~meeki
                                                                    </td>
                                                                    <td style="width:74px;height:17px">
                                                                        &nbsp;വാല്&zwnj;മീകി</td>
                                                                    <td style="width:359px;height:17px">&nbsp;..., LA,
                                                                        VIRAMA,&nbsp;ZWNJ,&nbsp;MA, ...<span
                                                                            style="background-color:transparent;font-size:10pt">&nbsp;&nbsp;</span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:92px;height:20px">&nbsp;vaal~_meeki
                                                                    </td>
                                                                    <td style="width:74px;height:20px">
                                                                        &nbsp;വാല്മീകി&nbsp;</td>
                                                                    <td style="width:359px;height:20px">&nbsp;..., LA,
                                                                        VIRAMA, MA, ...</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Sometimes users type '~' even when it is not required at the
                                                            word endings. Those '~'s are always consumed.</p>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;ath</td>
                                                                    <td style="width:60px;height:22px">&nbsp;അത്</td>
                                                                    <td style="width:137px;height:22px">&nbsp;A, TA,
                                                                        VIRAMA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:18px">&nbsp;ath~<br>
                                                                    </td>
                                                                    <td style="width:60px;height:18px">
                                                                        &nbsp;അത്&nbsp;<br></td>
                                                                    <td style="width:137px;height:18px">&nbsp;A, TA,
                                                                        VIRAMA</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h2><a name="TOC-Stand-alone-combining-marks"></a>Stand-alone
                                                            combining marks<br></h2><span
                                                            style="font-size:13.3333px">The Chandrakkala character '~'
                                                            (tilde) can be used to get stand-alone signs.</span><br
                                                            style="font-size:13.3333px"><br style="font-size:13.3333px">
                                                        <table border="1" cellspacing="0"
                                                            style="font-size:13.3333px;border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:75px;height:20px">&nbsp;~<br></td>
                                                                    <td style="width:87px;height:20px">&nbsp;്</td>
                                                                    <td style="width:191px;height:20px">&nbsp;VIRAMA
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:75px;height:15px">&nbsp;~a</td>
                                                                    <td style="width:87px;height:15px">
                                                                        &lt;empty&gt;&nbsp;</td>
                                                                    <td style="width:191px;height:15px">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:75px;height:17px">&nbsp;~aa</td>
                                                                    <td style="width:87px;height:17px">&nbsp;ാ</td>
                                                                    <td style="width:191px;height:17px">&nbsp;SIGN AA
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:75px;height:19px">&nbsp;~i<br></td>
                                                                    <td style="width:87px;height:19px">&nbsp;ി</td>
                                                                    <td style="width:191px;height:19px">&nbsp;SIGN I<br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:75px;height:20px">&nbsp;~am</td>
                                                                    <td style="width:87px;height:20px">&nbsp;ം</td>
                                                                    <td style="width:191px;height:20px">
                                                                        &nbsp;ANUSVARA<br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h2><a name="TOC-Doubling-of-NYA-"></a>Doubling of ഞ (NYA)</h2>
                                                        The sequence 'nj' produces 'ഞ്ഞ്', iff it is typed after any of
                                                        the following:<br>
                                                        <ol>
                                                            <li>a vowel<br></li>
                                                            <li>a vowel sign</li>
                                                            <li>a consonant</li>
                                                        </ol>At the same time, 'njnja' also produces 'ഞ്ഞ'.&nbsp;<span
                                                            style="background-color:transparent;font-size:10pt">To
                                                            produce singular form in those cases, use underscore '_', by
                                                            forcing it to be at word initial position.&nbsp;</span>
                                                    </div>
                                                    <div><span
                                                            style="background-color:transparent;font-size:10pt">Examples:</span>
                                                    </div>
                                                    <div><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td>&nbsp;njaan</td>
                                                                    <td>&nbsp;ഞാൻ</td>
                                                                    <td>&nbsp;NYA, SIGN AA, CHILLU N</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;manj</td>
                                                                    <td>&nbsp;മഞ്ഞ്</td>
                                                                    <td>&nbsp;MA, NYA, VIRAMA, NYA, VIRAMA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;manjnj</td>
                                                                    <td>&nbsp;മഞ്ഞ്</td>
                                                                    <td>&nbsp;MA, NYA, VIRAMA, NYA, VIRAMA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;manjnj~</td>
                                                                    <td>&nbsp;മഞ്ഞ്</td>
                                                                    <td>&nbsp;MA, NYA, VIRAMA, NYA, VIRAMA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:73px;height:15px">&nbsp;ma_nj</td>
                                                                    <td style="width:75px;height:15px">&nbsp;<span
                                                                            style="font-size:13.3333px">മ</span>ഞ്<br>
                                                                    </td>
                                                                    <td style="width:277px;height:15px">&nbsp;MA, NYA,
                                                                        VIRAMA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;jnjaanam</td>
                                                                    <td>&nbsp;ജ്ഞാനം</td>
                                                                    <td>&nbsp;JA, NYA, SIGN AA, NA, ANUSVARA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;anjjanam</td>
                                                                    <td>&nbsp;അഞ്ജനം</td>
                                                                    <td>&nbsp;A, NYA, VIRAMA, JA, NA, ANUSVARA</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p><br>However a similar nasal, 'ng' (ങ NGA) does not behaves in
                                                            this fashion. Examples:</p>
                                                        <table border="1" cellspacing="0"
                                                            style="font-size:13.3333px;font-weight:400;border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td>&nbsp;sing</td>
                                                                    <td>&nbsp;സിങ്</td>
                                                                    <td>&nbsp;SA, SIGN I, NGA, VIRAMA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;ingng</td>
                                                                    <td>&nbsp;ഇങ്ങ്</td>
                                                                    <td>&nbsp;A, NGA, VIRAMA, NGA, VIRAMA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;Saarngga</td>
                                                                    <td>&nbsp;ശാർങ്ഗ</td>
                                                                    <td>&nbsp;SHA, CHILLU RR, NGA, VIRAMA, GA<br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <h2><a name="TOC-Shortcuts-for-conjuncts"></a>Shortcuts for
                                                            conjuncts</h2>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:58px;height:18px">&nbsp;nka<br>
                                                                    </td>
                                                                    <td style="width:58px;height:18px">&nbsp;ങ്ക <br>
                                                                    </td>
                                                                    <td style="width:172px;height:18px">&nbsp;NGA,
                                                                        VIRAMA, KA<br>
                                                                    </td>
                                                                    <td style="width:74px;height:18px">&nbsp;മങ്ക</td>
                                                                    <td style="width:74px;height:18px">&nbsp;manka</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:58px;height:18px">&nbsp;ncha<br>
                                                                    </td>
                                                                    <td style="width:58px;height:18px">&nbsp;ഞ്ച <br>
                                                                    </td>
                                                                    <td style="width:172px;height:18px">&nbsp;GYA,
                                                                        VIRAMA, CA<br></td>
                                                                    <td style="width:74px;height:18px">&nbsp;പുഞ്ച</td>
                                                                    <td style="width:74px;height:18px">&nbsp;puncha</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:58px;height:18px">&nbsp;nchha</td>
                                                                    <td style="width:58px;height:18px">&nbsp;ഞ്ഛ <br>
                                                                    </td>
                                                                    <td style="width:172px;height:18px">&nbsp;GYA,
                                                                        VIRAMA, CHA</td>
                                                                    <td style="width:74px;height:18px">&nbsp;വാഞ്ഛ</td>
                                                                    <td style="width:74px;height:18px">&nbsp;vaanchha
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:58px;height:17px">&nbsp;ccha</td>
                                                                    <td style="width:58px;height:17px">&nbsp;ച്ച</td>
                                                                    <td style="width:172px;height:17px">&nbsp;CA,
                                                                        VIRAMA, CA</td>
                                                                    <td style="width:74px;height:17px">&nbsp;പച്ച</td>
                                                                    <td style="width:74px;height:17px">&nbsp;paccha</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:58px;height:18px">&nbsp;cchha</td>
                                                                    <td style="width:58px;height:18px">&nbsp;ച്ഛ <br>
                                                                    </td>
                                                                    <td style="width:172px;height:18px">&nbsp;CA,
                                                                        VIRAMA, CHA</td>
                                                                    <td style="width:74px;height:18px">&nbsp;പുച്ഛം</td>
                                                                    <td style="width:74px;height:18px">&nbsp;pucchham
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:58px;height:17px">&nbsp;tta</td>
                                                                    <td style="width:58px;height:17px">&nbsp;ട്ട<br>
                                                                    </td>
                                                                    <td style="width:172px;height:17px">&nbsp;TTA,
                                                                        VIRAMA, TTA<br></td>
                                                                    <td style="width:74px;height:17px">&nbsp;പട്ട</td>
                                                                    <td style="width:74px;height:17px">&nbsp;patta</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:58px;height:18px">&nbsp;ttha</td>
                                                                    <td style="width:58px;height:18px">&nbsp;ത്ത&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:18px">&nbsp;TA,
                                                                        VIRAMA, TA</td>
                                                                    <td style="width:74px;height:18px">&nbsp;തത്ത</td>
                                                                    <td style="width:74px;height:18px">&nbsp;thattha
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:58px;height:18px">&nbsp;tthha</td>
                                                                    <td style="width:58px;height:18px">&nbsp;ത്ഥ&nbsp;
                                                                    </td>
                                                                    <td style="width:172px;height:18px">&nbsp;TA,
                                                                        VIRAMA, THA</td>
                                                                    <td style="width:74px;height:18px">&nbsp;അർത്ഥം</td>
                                                                    <td style="width:74px;height:18px">&nbsp;artthham
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h2><a name="TOC-Error-correction-in-conjuncts"></a>
                                                            <p>Error correction in conjuncts</p>
                                                        </h2>
                                                        <div>
                                                            <table border="1" cellspacing="0"
                                                                style="border-collapse:collapse;border-top-color:rgb(136,136,136);border-right-color:rgb(136,136,136);border-bottom-color:rgb(136,136,136);border-left-color:rgb(136,136,136);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width:65px;height:15px">&nbsp;Tta
                                                                        </td>
                                                                        <td style="width:53px;height:15px">&nbsp;ട്ട
                                                                        </td>
                                                                        <td style="width:148px;height:15px">&nbsp;TTA,
                                                                            VIRAMA, TTA</td>
                                                                        <td style="width:60px">&nbsp;പട്ട</td>
                                                                        <td style="width:60px">&nbsp;paTta</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width:65px;height:15px">&nbsp;tTa
                                                                        </td>
                                                                        <td style="width:53px;height:15px">&nbsp;ട്ട
                                                                        </td>
                                                                        <td style="width:148px;height:15px">&nbsp;TTA,
                                                                            VIRAMA, TTA</td>
                                                                        <td style="width:60px">&nbsp;പട്ട</td>
                                                                        <td style="width:60px">&nbsp;patTa</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width:65px;height:15px">&nbsp;nTa
                                                                        </td>
                                                                        <td style="width:53px;height:15px">&nbsp;ണ്ട
                                                                        </td>
                                                                        <td style="width:148px;height:15px">&nbsp;NNA,
                                                                            VIRAMA, TTA</td>
                                                                        <td style="width:60px">&nbsp;പണ്ട്</td>
                                                                        <td style="width:60px">&nbsp;panT</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width:65px;height:15px">&nbsp;Nta
                                                                        </td>
                                                                        <td style="width:53px;height:15px">&nbsp;ണ്ട
                                                                        </td>
                                                                        <td style="width:148px;height:15px">&nbsp;NNA,
                                                                            VIRAMA, TTA</td>
                                                                        <td style="width:60px">&nbsp;പണ്ട്</td>
                                                                        <td style="width:60px">&nbsp;paNt</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                        <h2><a name="TOC-Mapping-for-unmapped-keys"></a>Mapping for
                                                            unmapped keys</h2>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:59px;height:22px">&nbsp;ea</td>
                                                                    <td style="width:59px;height:22px">&nbsp;ഈ</td>
                                                                    <td style="width:136px;height:22px">&nbsp;II</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:59px;height:22px">&nbsp;ee</td>
                                                                    <td style="width:59px;height:22px">&nbsp;ഈ</td>
                                                                    <td style="width:136px;height:22px">&nbsp;II</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:59px;height:22px">&nbsp;ie</td>
                                                                    <td style="width:59px;height:22px">&nbsp;ഈ</td>
                                                                    <td style="width:136px;height:22px">&nbsp;II</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:59px;height:22px">&nbsp;ei</td>
                                                                    <td style="width:59px;height:22px">&nbsp;ഐ</td>
                                                                    <td style="width:136px;height:22px">&nbsp;AI</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:59px;height:22px">&nbsp;oo</td>
                                                                    <td style="width:59px;height:22px">&nbsp;ഊ</td>
                                                                    <td style="width:136px;height:22px">&nbsp;UU</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:59px;height:22px">&nbsp;ou</td>
                                                                    <td style="width:59px;height:22px">&nbsp;ഔ</td>
                                                                    <td style="width:136px;height:22px">&nbsp;AU<br>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;c<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ൿ</td>
                                                                    <td style="width:134px;height:22px">&nbsp;CHILLU
                                                                        K<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;fa<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ഫ&nbsp;
                                                                    </td>
                                                                    <td style="width:134px;height:22px">&nbsp;PHA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;qa</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ഖ&nbsp;
                                                                    </td>
                                                                    <td style="width:134px;height:22px">&nbsp;KHA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;wa</td>
                                                                    <td style="width:60px;height:22px">&nbsp;വ&nbsp;
                                                                    </td>
                                                                    <td style="width:134px;height:22px">&nbsp;VA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;xa</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ക്സ&nbsp;
                                                                    </td>
                                                                    <td style="width:134px;height:22px">&nbsp;KA,
                                                                        VIRAMA, SA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;za</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ശ</td>
                                                                    <td style="width:134px;height:22px">&nbsp;SHA</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;A<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ആ&nbsp;
                                                                    </td>
                                                                    <td style="width:133px;height:22px">&nbsp;AA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Ba<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ബ്ബ&nbsp;
                                                                    </td>
                                                                    <td style="width:133px;height:22px">&nbsp;BA,
                                                                        VIRAMA, BA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Ca</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ച്ച</td>
                                                                    <td style="width:133px;height:22px">&nbsp;CA,
                                                                        VIRAMA, CA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Fa<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ഫ&nbsp;
                                                                    </td>
                                                                    <td style="width:133px;height:22px">&nbsp;PHA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Ga</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ഗ്ഗ&nbsp;
                                                                    </td>
                                                                    <td style="width:133px;height:22px">&nbsp;GA,
                                                                        VIRAMA, GA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;I</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ഈ&nbsp;
                                                                    </td>
                                                                    <td style="width:133px;height:22px">&nbsp;II</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Ja</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ജ്ജ&nbsp;
                                                                    </td>
                                                                    <td style="width:133px;height:22px">&nbsp;JA,
                                                                        VIRAMA, JA<br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Ka<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ക്ക&nbsp;
                                                                    </td>
                                                                    <td style="width:132px;height:22px">&nbsp;KA,
                                                                        VIRAMA, KA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Ma<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;മ്മ&nbsp;
                                                                    </td>
                                                                    <td style="width:132px;height:22px">&nbsp;MA,
                                                                        VIRAMA, MA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Pa</td>
                                                                    <td style="width:60px;height:22px">&nbsp;പ്പ&nbsp;
                                                                    </td>
                                                                    <td style="width:132px;height:22px">&nbsp;PA,
                                                                        VIRAMA, PA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Qa<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;ഖ&nbsp;
                                                                    </td>
                                                                    <td style="width:132px;height:22px">&nbsp;KHA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;U</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ഊ&nbsp;
                                                                    </td>
                                                                    <td style="width:132px;height:22px">&nbsp;UU</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Va</td>
                                                                    <td style="width:60px;height:22px">&nbsp;വ്വ&nbsp;
                                                                    </td>
                                                                    <td style="width:132px;height:22px">&nbsp;VA,
                                                                        VIRAMA, VA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Wa</td>
                                                                    <td style="width:60px;height:22px">&nbsp;വ്വ&nbsp;
                                                                    </td>
                                                                    <td style="width:132px;height:22px">&nbsp;VA,
                                                                        VIRAMA, VA</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Xa<br></td>
                                                                    <td style="width:60px;height:22px">&nbsp;ക്സ</td>
                                                                    <td style="width:134px;height:22px">&nbsp;KA,
                                                                        VIRAMA, SSA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Ya<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;യ്യ <br>
                                                                    </td>
                                                                    <td style="width:134px;height:22px">&nbsp;YA,
                                                                        VIRAMA, YA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:32px">&nbsp;Za<br></td>
                                                                    <td style="width:60px;height:32px">&nbsp;ഴ</td>
                                                                    <td style="width:134px;height:32px">&nbsp;LLLA</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h2><a name="TOC-Extra-elongation-for-vowel-signs"></a>Extra
                                                            elongation for vowel signs</h2>('..' denotes that the last
                                                        letter can be repeated to get last Malayalam vowel sign
                                                        repeated)
                                                    </div>
                                                    <div><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;aaa..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;ആാാ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;AA, SIGN
                                                                        AA, SIGN AA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;kaaa..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;കാാ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;KA, SIGN
                                                                        AA, SIGN AA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;AA..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;ആാ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;AA, SIGN
                                                                        AA, SIGN AA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;kAA..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;കാാ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;KA, SIGN
                                                                        AA, SIGN AA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;iii..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;ഈൗ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;II, AU
                                                                        LENGTH MARK<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;kiii..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;കീീ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;KA, SIGN
                                                                        II, SIGN II<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;eee..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;ഈൗ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;II, AU
                                                                        LENGTH MARK</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;keee..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;കീീ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;KA, SIGN
                                                                        II, SIGN II</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:15px">&nbsp;II..</td>
                                                                    <td style="width:89px;height:15px">&nbsp;ഈൗ..</td>
                                                                    <td style="width:300px;height:15px">&nbsp;II, AU
                                                                        LENGTH MARK</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;kII..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;കീീ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;KA, SIGN
                                                                        II, SIGN II</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:15px">&nbsp;EE..</td>
                                                                    <td style="width:89px;height:15px">&nbsp;ഏേ..</td>
                                                                    <td style="width:300px;height:15px">&nbsp;EE, SIGN
                                                                        EE</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;kEE..</td>
                                                                    <td style="width:89px;height:17px"><span
                                                                            style="font-size:13.3333px">&nbsp;കേേ..</span>&nbsp;
                                                                    </td>
                                                                    <td style="width:300px;height:17px">&nbsp;KA, SIGN
                                                                        EE, SIGN EE</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;uuu..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;ഊൗ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;UU, AU
                                                                        LENGTH MARK</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:22px">&nbsp;kuuu..</td>
                                                                    <td style="width:89px;height:22px">&nbsp;കൂൂ..</td>
                                                                    <td style="width:300px;height:22px">&nbsp;KA, SIGN
                                                                        UU, SIGN UU<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:15px">&nbsp;UU..&nbsp;
                                                                    </td>
                                                                    <td style="width:89px;height:15px">&nbsp;ഊൗ..</td>
                                                                    <td style="width:300px;height:15px">&nbsp;UU, AU
                                                                        LENGTH MARK</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;kUU..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;കൂൂ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;KA, SIGN
                                                                        UU, SIGN UU</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;ooo..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;ഊൗ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;UU, AU
                                                                        LENGTH MARK</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:15px">&nbsp;kooo..</td>
                                                                    <td style="width:89px;height:15px">&nbsp;കൂൂ..</td>
                                                                    <td style="width:300px;height:15px">&nbsp;KA, SIGN
                                                                        UU, SIGN UU</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;OO..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;ഓാ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;AU, SIGN
                                                                        AA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;kOO..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;കോോ..</td>
                                                                    <td style="width:300px;height:17px">
                                                                        &nbsp;KA,&nbsp;AU LENGTH MARK, AU LENGTH MARK
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:71px;height:17px">&nbsp;auu..</td>
                                                                    <td style="width:89px;height:17px">&nbsp;ഔൗ..</td>
                                                                    <td style="width:300px;height:17px">&nbsp;AU, AU
                                                                        LENGTH MARK</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>All vowel producing letters have above property.</p>
                                                        <p>
                                                        </p>
                                                        <h2><a name="TOC-Archaic-letters"></a>Archaic letters</h2>To get
                                                        the archaic form of a letter, please use the symbol '\'
                                                        following it. Even more archaic form is given out by repeating
                                                        it - example: '\\'. In the table below an archaic character is
                                                        represented by its codepoint, if it is not available in the <a
                                                            href="https://github.com/googlefonts/noto-fonts/tree/master/unhinted/NotoSansMalayalam"
                                                            target="_blank" rel="nofollow">latest version of Noto Sans
                                                            Malayalam</a>&nbsp;font.<br><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:47px;height:17px">&nbsp;അ\<br></td>
                                                                    <td style="width:48px;height:17px">&nbsp;a\</td>
                                                                    <td style="width:62px;height:17px">&nbsp;ഽ
                                                                    </td>
                                                                    <td style="width:211px;height:17px">
                                                                        &nbsp;AVAGRAHA<br>
                                                                    </td>
                                                                    <td style="width:90px;height:17px">&nbsp;അസോഽസൗ</td>
                                                                    <td style="width:70px;height:17px">&nbsp;asOa\sau
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:47px;height:19px">&nbsp;ഇ\</td>
                                                                    <td style="width:48px;height:19px">&nbsp;ii\&nbsp;
                                                                    </td>
                                                                    <td style="width:62px;height:19px">&nbsp;ൟ</td>
                                                                    <td style="width:211px;height:19px">&nbsp;ARCHAIC
                                                                        II&nbsp;</td>
                                                                    <td style="width:90px;height:19px">&nbsp;ൟറ</td>
                                                                    <td style="width:70px;height:19px">&nbsp;ii\rra</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:47px;height:17px">&nbsp;ക്\</td>
                                                                    <td style="width:48px;height:17px">&nbsp;k\</td>
                                                                    <td style="width:62px;height:17px">&nbsp;ൿ</td>
                                                                    <td style="width:211px;height:17px">&nbsp;CHILLU
                                                                        K<br></td>
                                                                    <td style="width:90px;height:17px">&nbsp;ആമ്പിൿ</td>
                                                                    <td style="width:70px;height:17px">&nbsp;aampik\
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:47px;height:17px">&nbsp;റ്റ്\<br>
                                                                    </td>
                                                                    <td style="width:48px;height:17px">&nbsp;t\</td>
                                                                    <td style="width:62px;height:17px">&nbsp;ഺ്</td>
                                                                    <td style="width:211px;height:17px">&nbsp;TTTA <br>
                                                                    </td>
                                                                    <td style="width:90px;height:17px">&nbsp;അഺ്</td>
                                                                    <td style="width:70px;height:17px">&nbsp;at\</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:47px;height:17px">&nbsp;റ്റ\<br>
                                                                    </td>
                                                                    <td style="width:48px;height:17px">&nbsp;ta\</td>
                                                                    <td style="width:62px;height:17px">&nbsp;ഺ&nbsp;
                                                                    </td>
                                                                    <td style="width:211px;height:17px">&nbsp;TTTA</td>
                                                                    <td style="width:90px;height:17px">&nbsp;അഺ</td>
                                                                    <td style="width:70px;height:17px">&nbsp;ata\</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:47px;height:17px">&nbsp;ൻ\</td>
                                                                    <td style="width:48px;height:17px">&nbsp;n\</td>
                                                                    <td style="width:62px;height:17px">&nbsp;ഩ്</td>
                                                                    <td style="width:211px;height:17px">&nbsp;NNNA <br>
                                                                    </td>
                                                                    <td style="width:90px;height:17px">&nbsp;അഩ്</td>
                                                                    <td style="width:70px;height:17px">&nbsp;an\</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:47px;height:17px">&nbsp;ന\</td>
                                                                    <td style="width:48px;height:17px">&nbsp;na\</td>
                                                                    <td style="width:62px;height:17px">&nbsp;ഩ</td>
                                                                    <td style="width:211px;height:17px">&nbsp;NNNA&nbsp;
                                                                    </td>
                                                                    <td style="width:90px;height:17px">&nbsp;അഩ</td>
                                                                    <td style="width:70px;height:17px">&nbsp;ana\</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:47px;height:17px">&nbsp;നു\</td>
                                                                    <td style="width:48px;height:17px">&nbsp;nu\</td>
                                                                    <td style="width:62px;height:17px">&nbsp;൹</td>
                                                                    <td style="width:211px;height:17px">&nbsp;DATE
                                                                        MARK<br></td>
                                                                    <td style="width:90px;height:17px">&nbsp;17-൹</td>
                                                                    <td style="width:70px;height:17px">&nbsp;17-nu\</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;ം\\</td>
                                                                    <td>&nbsp;m\\</td>
                                                                    <td>&nbsp;U+0D00</td>
                                                                    <td>&nbsp;ANUSVARA ABOVE</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;ം\\\</td>
                                                                    <td>&nbsp;m\\\</td>
                                                                    <td>&nbsp;U+0D01</td>
                                                                    <td>&nbsp;CANDRABINDU</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;&nbsp;ം\</td>
                                                                    <td>&nbsp;m\</td>
                                                                    <td>&nbsp;ൔ</td>
                                                                    <td>&nbsp;CHILLU M</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;യ്\</td>
                                                                    <td>&nbsp;y\&nbsp;</td>
                                                                    <td>&nbsp;ൕ</td>
                                                                    <td>&nbsp;CHILLU Y</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;ഴ്\</td>
                                                                    <td>&nbsp;zh\</td>
                                                                    <td>&nbsp;ൖ</td>
                                                                    <td>&nbsp;CHILLU LLL</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;ക്\</td>
                                                                    <td>&nbsp;k\</td>
                                                                    <td>&nbsp;ൿ</td>
                                                                    <td>&nbsp;CHILLU K</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:47px;height:17px">&nbsp;ർ\</td>
                                                                    <td style="width:48px;height:17px">&nbsp;r\</td>
                                                                    <td style="width:62px;height:17px">&nbsp;ൎ&nbsp;<br>
                                                                    </td>
                                                                    <td style="width:211px;height:17px">&nbsp;DOT REPH
                                                                    </td>
                                                                    <td style="width:90px;height:17px">&nbsp;ഭാൎയ്യ</td>
                                                                    <td style="width:70px;height:17px">&nbsp;bhaar\ya
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:47px;height:20px">&nbsp;<span
                                                                            style="color:rgb(0,0,0);font-family:sans-serif;line-height:21px"><span>₹\<br></span></span>
                                                                    </td>
                                                                    <td style="width:48px;height:20px">&nbsp;$\</td>
                                                                    <td style="width:62px;height:20px"><span
                                                                            style="color:rgb(0,0,0);font-family:sans-serif;font-size:16px;line-height:21px">&nbsp;₨</span>&nbsp;
                                                                    </td>
                                                                    <td style="width:211px;height:20px">&nbsp;RUPEE SIGN
                                                                    </td>
                                                                    <td style="width:90px;height:20px">&nbsp;₨10</td>
                                                                    <td style="width:70px;height:20px">&nbsp;$\10</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;പറ\</td>
                                                                    <td>&nbsp;parra\</td>
                                                                    <td>&nbsp;൏</td>
                                                                    <td>&nbsp;PARA SIGN</td>
                                                                    <td>&nbsp;</td>
                                                                    <td>&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-top-color:rgb(136,136,136);border-right-color:rgb(136,136,136);border-bottom-color:rgb(136,136,136);border-left-color:rgb(136,136,136);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:43px;height:17px">&nbsp;ൾ\<br></td>
                                                                    <td style="width:44px;height:17px">&nbsp;L\</td>
                                                                    <td style="width:84px;height:17px">&nbsp;ഌ</td>
                                                                    <td style="width:200px;height:17px">&nbsp;VOCALIC
                                                                        L<br></td>
                                                                    <td style="width:75px;height:17px">&nbsp;ഌകാരം</td>
                                                                    <td style="width:86px;height:17px">&nbsp;L\kaaram
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:43px;height:17px">&nbsp;<span
                                                                            style="font-size:13.3333px">ക്&zwnj;ള്\</span>
                                                                    </td>
                                                                    <td style="width:44px;height:17px">&nbsp;kL\</td>
                                                                    <td style="width:84px;height:17px">&nbsp;കൢ*</td>
                                                                    <td style="width:200px;height:17px">&nbsp;KA, SIGN
                                                                        VOCALIC L</td>
                                                                    <td style="width:75px;height:17px">&nbsp;കൢപ്തം</td>
                                                                    <td style="width:86px;height:17px">&nbsp;kL\ptham
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:43px;height:17px">&nbsp;ള്ള്\<br>
                                                                    </td>
                                                                    <td style="width:44px;height:17px">&nbsp;LL\</td>
                                                                    <td style="width:84px;height:17px">&nbsp;ൡ</td>
                                                                    <td style="width:200px;height:17px">&nbsp;VOCALIC LL
                                                                    </td>
                                                                    <td style="width:75px;height:17px">&nbsp;ൡതം</td>
                                                                    <td style="width:86px;height:17px">&nbsp;LL\tham
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:43px;height:17px">&nbsp;<span
                                                                            style="font-size:13.3333px">ക്ള്ള്\</span>
                                                                    </td>
                                                                    <td style="width:44px;height:17px">&nbsp;kLL\</td>
                                                                    <td style="width:84px;height:17px">&nbsp;കൣ*</td>
                                                                    <td style="width:200px;height:17px">&nbsp;KA, SIGN
                                                                        VOCALIC LL</td>
                                                                    <td style="width:75px;height:17px">&nbsp;കൣതം</td>
                                                                    <td style="width:86px;height:17px">&nbsp;kLL\tham
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:43px;height:19px">&nbsp;കൗ\</td>
                                                                    <td style="width:44px;height:19px">&nbsp;kau\</td>
                                                                    <td style="width:84px;height:19px">&nbsp;കൌ*<br>
                                                                    </td>
                                                                    <td style="width:200px;height:19px">&nbsp;KA, SIGN
                                                                        AU<br></td>
                                                                    <td style="width:75px;height:19px">&nbsp;കൌതുകം</td>
                                                                    <td style="width:86px;height:19px">&nbsp;kau\thukam
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:43px;height:15px">&nbsp;</td>
                                                                    <td style="width:44px;height:15px">&nbsp;~\</td>
                                                                    <td style="width:84px;height:15px">&nbsp;U+0D3C</td>
                                                                    <td style="width:200px;height:15px">&nbsp;CIRCLE
                                                                        ABOVE VIRAMA</td>
                                                                    <td style="width:75px;height:15px">&nbsp;</td>
                                                                    <td style="width:86px;height:15px">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:43px;height:15px">&nbsp;</td>
                                                                    <td style="width:44px;height:15px">&nbsp;~\\</td>
                                                                    <td style="width:84px;height:15px">&nbsp;U+0D3B</td>
                                                                    <td style="width:200px;height:15px">&nbsp;VERTICAL
                                                                        BAR VIRAMA</td>
                                                                    <td style="width:75px;height:15px">&nbsp;</td>
                                                                    <td style="width:86px;height:15px">&nbsp;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>* The consonant 'k' is just an example consonant to show
                                                        the vowel sign.
                                                    </div>
                                                    <div><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:57px;height:18px">&nbsp;1\<br>
                                                                    </td>
                                                                    <td style="width:100px;height:18px">&nbsp;൧<br>
                                                                    </td>
                                                                    <td style="width:177px;height:18px">&nbsp;ONE<br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:57px;height:30px">&nbsp;10\<br>
                                                                    </td>
                                                                    <td style="width:100px;height:30px">&nbsp;൰</td>
                                                                    <td style="width:177px;height:30px">&nbsp;TEN<br>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:57px;height:30px">&nbsp;100\</td>
                                                                    <td style="width:100px;height:30px">&nbsp;൱</td>
                                                                    <td style="width:177px;height:30px">
                                                                        &nbsp;HUNDRED<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:57px;height:30px">&nbsp;1000\</td>
                                                                    <td style="width:100px;height:30px">&nbsp;൲</td>
                                                                    <td style="width:177px;height:30px">
                                                                        &nbsp;THOUSAND<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:57px;height:30px">&nbsp;1/4\</td>
                                                                    <td style="width:100px;height:30px">&nbsp;൳</td>
                                                                    <td style="width:177px;height:30px">&nbsp;ONE
                                                                        QUARTER <br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:57px;height:30px">&nbsp;1/2\</td>
                                                                    <td style="width:100px;height:30px">&nbsp;൴</td>
                                                                    <td style="width:177px;height:30px">&nbsp;ONE
                                                                        HALF<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:57px;height:32px">&nbsp;3/4\</td>
                                                                    <td style="width:100px;height:32px">&nbsp;൵</td>
                                                                    <td style="width:177px;height:32px">&nbsp;THREE
                                                                        QUARTERS<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;...</td>
                                                                    <td>&nbsp;...</td>
                                                                    <td>&nbsp;&lt;remaining fractions&gt;</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p><span style="background-color:transparent;font-size:10pt">Digits
                                                                after a Malayalam digit will be a converted to Malayalam
                                                                digit.</span></p>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-top-color:rgb(136,136,136);border-right-color:rgb(136,136,136);border-bottom-color:rgb(136,136,136);border-left-color:rgb(136,136,136);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:52px;height:17px">&nbsp;1\210</td>
                                                                    <td style="width:52px;height:17px">&nbsp;൧൨൧൦</td>
                                                                    <td style="width:206px;height:17px">&nbsp;ONE, TWO,
                                                                        ONE, ZERO<br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h2><a name="TOC-Joiners"></a>
                                                        </h2>Explicit joiners can be typed as follows:<br><br
                                                            style="font-size:13.3333px">
                                                        <table border="1" cellspacing="0"
                                                            style="font-size:13.3333px;border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:46px;height:41px">&nbsp;+<br></td>
                                                                    <td style="width:89px;height:41px">&nbsp;U+200D<br>
                                                                    </td>
                                                                    <td style="width:222px;height:41px">&nbsp;ZERO WIDTH
                                                                        JOINER<br></td>
                                                                    <td style="width:150px;height:41px">&nbsp;ന്&zwj;
                                                                        (legacy sequence)</td>
                                                                    <td style="width:126px;height:41px">&nbsp;n~+</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:46px;height:18px">&nbsp;|<br></td>
                                                                    <td style="width:89px;height:18px">&nbsp;U+200C</td>
                                                                    <td style="width:222px;height:18px">&nbsp;ZERO
                                                                        WIDTH&nbsp;NON JOINER</td>
                                                                    <td style="width:150px;height:18px">&nbsp;ൻ്&zwnj;റ
                                                                    </td>
                                                                    <td style="width:126px;height:18px">&nbsp;n|~rra
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:46px;height:16px">&nbsp;||</td>
                                                                    <td style="width:89px;height:16px">&nbsp;U+200B</td>
                                                                    <td style="width:222px;height:16px">&nbsp;ZERO WIDTH
                                                                        SPACE<br></td>
                                                                    <td style="width:150px;height:16px">&nbsp;ൻ&#8203;െ
                                                                    </td>
                                                                    <td style="width:126px;height:16px">&nbsp;n||~e</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <div><br></div>
                                                        <h2><a name="TOC-Escape-by-word"></a>Escape by word</h2>
                                                        <p><span style="background-color:transparent;font-size:10pt">Transliteration
                                                                is not attempted if it is preceded by '='.</span></p>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;=a
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;a</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p>Keys after an English letter will be kept as it is. Along
                                                            with English letters, it is continued for the following
                                                            special characters: . : / @. When any of the rest of the
                                                            special characters including space is entered, escaping is
                                                            broken and transliteration will be continuted. Examples:</p>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:215px;height:19px">
                                                                        &nbsp;=abc@example.com enna&nbsp;</td>
                                                                    <td style="width:233px;height:19px">
                                                                        &nbsp;abc@example.com എന്ന</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;=http://www.9.com-l</td>
                                                                    <td>&nbsp;http://www.9.com-ൽ</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;9l</td>
                                                                    <td>&nbsp;9ൽ</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <p style="font-size:13.3333px"><br></p>
                                                        <h2><a name="TOC-Compatibility-mapping"></a>
                                                            <p>Compatibility mapping</p>
                                                        </h2>Previous versions of Mozhi had 'Ra' stands for റ. Since
                                                        vowel (ഋ) and consonant(റ) can be distinguished from their
                                                        contexts, 'Ra' can be overloaded for&nbsp;<span
                                                            style="font-size:13.3333px;background-color:transparent">റ
                                                            too</span><span
                                                            style="background-color:transparent;font-size:10pt">.
                                                            ഏxamples:</span>
                                                    </div>
                                                    <div><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;pR<br></td>
                                                                    <td style="width:60px;height:22px">&nbsp;പൃ</td>
                                                                    <td style="width:156px;height:22px">&nbsp;PA, SIGN
                                                                        VOCALIC R<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;pRa<br>
                                                                    </td>
                                                                    <td style="width:60px;height:22px">&nbsp;പ്ര</td>
                                                                    <td style="width:156px;height:22px">&nbsp;PA,
                                                                        VIRAMA, RA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;R</td>
                                                                    <td style="width:60px;height:22px">&nbsp;ഋ</td>
                                                                    <td style="width:156px;height:22px">&nbsp;VOCALIC
                                                                        R<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:60px;height:22px">&nbsp;Ra</td>
                                                                    <td style="width:60px;height:22px">&nbsp;റ</td>
                                                                    <td style="width:156px;height:22px">&nbsp;RRA</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>&nbsp;aR</td>
                                                                    <td>&nbsp;അർ <br></td>
                                                                    <td>&nbsp;A, CHILLU R<br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <h2><a name="TOC-Legacy-encoding"></a>Legacy encoding</h2>
                                                        <div>Chillu sequences mentioned in Unicode standard before its
                                                            version 5.1 are produced by adding '^' after the standard
                                                            chillu-letter.</div>
                                                        <div><br></div>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-top-color:rgb(136,136,136);border-right-color:rgb(136,136,136);border-bottom-color:rgb(136,136,136);border-left-color:rgb(136,136,136);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:52px;height:24px">&nbsp;n^<br>
                                                                    </td>
                                                                    <td style="width:52px;height:24px">&nbsp;ൻ^&nbsp;
                                                                    </td>
                                                                    <td style="width:52px;height:24px">&nbsp;ന്&zwj;
                                                                    </td>
                                                                    <td style="width:164px;height:24px">&nbsp;NA,
                                                                        VIRAMA, ZWJ<br></td>
                                                                    <td style="width:103px;height:24px">
                                                                        &nbsp;മോഹന്&zwj;ലാല്&zwj;</td>
                                                                    <td style="width:138px;height:24px">
                                                                        &nbsp;mohan^_laal^</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:52px;height:17px">&nbsp;l^</td>
                                                                    <td style="width:52px;height:17px">&nbsp;ൽ^</td>
                                                                    <td style="width:52px;height:17px">&nbsp;ല്&zwj;
                                                                    </td>
                                                                    <td style="width:164px;height:17px">&nbsp;LA,
                                                                        VIRAMA, ZWJ</td>
                                                                    <td style="width:103px;height:17px">
                                                                        &nbsp;മോഹന്&zwj;ലാല്&zwj;</td>
                                                                    <td style="width:138px;height:17px">
                                                                        &nbsp;mohan^_laal^</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <div>
                                                        <div style="font-size:13.3333px"><br></div>
                                                        <div style="font-size:13.3333px">There are multiple legacy
                                                            encoding for&nbsp;<span
                                                                style="font-size:13.3333px;background-color:transparent">ൻ്റ.
                                                                The sequence specified in the standard is not fully
                                                                supported in popular input tools or OSes.</span></div>
                                                        <div style="font-size:13.3333px"><br></div>
                                                        <table border="1" cellspacing="0"
                                                            style="font-size:13.3333px;border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:88px;height:63px">&nbsp;nt^a<br
                                                                            style="font-size:13.3333px"><span
                                                                            style="font-size:13.3333px">&nbsp;nta^</span><br
                                                                            style="font-size:13.3333px"><span
                                                                            style="font-size:13.3333px">&nbsp;nte^</span><br
                                                                            style="font-size:13.3333px"><span
                                                                            style="font-size:13.3333px">&nbsp;...</span>
                                                                    </td>
                                                                    <td style="width:76px;height:63px">&nbsp;ൻ്റ്<span
                                                                            style="font-size:13.3333px">^a</span><br
                                                                            style="font-size:13.3333px"><span
                                                                            style="font-size:13.3333px">&nbsp;ൻ്റ^</span><span
                                                                            style="font-size:13.3333px"><br></span><span
                                                                            style="font-size:13.3333px">&nbsp;ൻ്റെ^</span>
                                                                    </td>
                                                                    <td style="width:39px;height:63px">&nbsp;ന്റ</td>
                                                                    <td style="width:155px;height:63px">&nbsp;NA,
                                                                        VIRAMA, RRA</td>
                                                                    <td style="width:76px;height:63px">&nbsp;എന്റെ</td>
                                                                    <td style="width:82px;height:63px">
                                                                        &nbsp;ent^e<br>&nbsp;ente^</td>
                                                                    <td style="width:255px;height:63px">&nbsp;Sequence
                                                                        common in Linux community and many input tools
                                                                        in the market.</td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:88px;height:63px">&nbsp;nt^^a<br
                                                                            style="font-size:13.3333px"><span
                                                                            style="font-size:13.3333px">&nbsp;nta^^</span><br
                                                                            style="font-size:13.3333px"><span
                                                                            style="font-size:13.3333px">&nbsp;nte^^</span><span
                                                                            style="font-size:13.3333px">&nbsp;</span><br
                                                                            style="font-size:13.3333px"><span
                                                                            style="font-size:13.3333px">&nbsp;...</span>
                                                                    </td>
                                                                    <td style="width:76px;height:63px">&nbsp;ൻ്റ്^<span
                                                                            style="font-size:13.3333px">^a</span><br
                                                                            style="font-size:13.3333px"><span
                                                                            style="font-size:13.3333px">&nbsp;ൻ്റ</span><span
                                                                            style="font-size:13.3333px">^^<br></span><span
                                                                            style="font-size:13.3333px">&nbsp;ൻ്റെ</span><span
                                                                            style="font-size:13.3333px">^^</span></td>
                                                                    <td style="width:39px;height:63px">&nbsp;ന്&zwj;റ
                                                                    </td>
                                                                    <td style="width:155px;height:63px">&nbsp;NA,
                                                                        VIRAMA, ZWJ, RRA</td>
                                                                    <td style="width:76px;height:63px">
                                                                        &nbsp;&nbsp;എന്&zwj;റെ</td>
                                                                    <td style="width:82px;height:63px">
                                                                        &nbsp;ent^^e&nbsp;<br
                                                                            style="font-size:13.3333px"><span
                                                                            style="font-size:13.3333px">&nbsp;ente^^</span>
                                                                    </td>
                                                                    <td style="width:255px;height:63px">&nbsp;Used by
                                                                        Microsoft Windows natively.</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                    <h2><a name="TOC-Backspace"></a>Backspace</h2>
                                                    <div>On backspace, use the OS's backspace operation. However, next
                                                        key would use the context of the existing input. Example:</div>
                                                    <div><br>
                                                        <table border="1" cellspacing="0"
                                                            style="border-collapse:collapse;border-top-color:rgb(136,136,136);border-right-color:rgb(136,136,136);border-bottom-color:rgb(136,136,136);border-left-color:rgb(136,136,136);border-top-width:1px;border-right-width:1px;border-bottom-width:1px;border-left-width:1px">
                                                            <tbody>
                                                                <tr>
                                                                    <td style="width:155px;height:18px">&nbsp;nna<br>
                                                                    </td>
                                                                    <td style="width:56px;height:18px">&nbsp;ന്ന</td>
                                                                    <td style="width:152px;height:18px">&nbsp;NA,
                                                                        VIRAMA, NA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:155px;height:17px">
                                                                        &nbsp;nna&lt;backspace&gt;<br></td>
                                                                    <td style="width:56px;height:17px">&nbsp;ന്</td>
                                                                    <td style="width:152px;height:17px">&nbsp;NA,
                                                                        VIRAMA<br></td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="width:155px;height:21px">
                                                                        &nbsp;nna&lt;backspace&gt;ka</td>
                                                                    <td style="width:56px;height:21px">&nbsp;ങ്ക</td>
                                                                    <td style="width:152px;height:21px">&nbsp;NGA,
                                                                        VIRAMA, KA<br></td>
                                                                </tr>
                                                            </tbody>
                                                        </table><br>
                                                    </div>
                                                    <div>
                                                        <h2><a name="TOC-Convenience-Mapping-and-Emoji"></a>Convenience
                                                            Mapping and Emoji</h2>
                                                        <div style="font-size:13.3333px">Following mapping does not have
                                                            anything to do with Malayalam; however, these are useful
                                                            essentials:</div>
                                                        <div style="font-size:13.3333px"><br>
                                                            <table border="1" cellspacing="0"
                                                                style="border-collapse:collapse;border-color:rgb(136,136,136);border-width:1px">
                                                                <tbody>
                                                                    <tr>
                                                                        <td style="width:155px;height:18px">&nbsp;--<br>
                                                                        </td>
                                                                        <td style="width:56px;height:18px">&nbsp;—</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="width:155px;height:17px">
                                                                            &nbsp;-&gt;<br></td>
                                                                        <td style="width:56px;height:17px">&nbsp;→</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&nbsp;:)</td>
                                                                        <td>&nbsp;😊</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&nbsp;:(</td>
                                                                        <td>&nbsp;☹</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&nbsp;:D</td>
                                                                        <td>&nbsp;😄</td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>&nbsp;:x</td>
                                                                        <td>&nbsp;😘</td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
