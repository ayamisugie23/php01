<?php
// ファイルを開く
$openFile = fopen('./data/data.txt','r');

// 表の出力
    // echo "<table>
    //         <tr>
    //             <th>お名前</th>
    //             <th>性別</th>
    //             <th>年齢</th>
    //             <th>こだわり</th>
    //             <th>似合う色やファッションを知っているか</th>
    //             <th>似合うファッションをしたいか</th>
    //             <th>ファッションにおける不満</th>
    //         </tr>";

    // 表の出力
    // echo "<table>
    //         <tr>
    //             <th>お名前</th>
    //             <th>性別</th>
    //             <th>年齢</th>
    //             <th>こだわり</th>
    //             <th>似合う色やファッションを知っているか</th>
    //             <th>似合うファッションをしたいか</th>
    //             <th>ファッションにおける不満</th>
    //         </tr>";
// 表の出力
while ($str =fgets($openFile)) {
    echo nl2br($str);
}           
    // echo "</table>";

    

// 表の出力
while ($str =fgets($openFile)) {
    echo nl2br($str);
}

// $line = file($openFile);
// echo '<table cellpadding="4" cellspacing="1" style="background-color : #aaaaaa;"><TBODY>';
// for ($i = 0; $i < count($line); $i++) {
//     $data = split("\t", $line[$i]); 
//     echo '<tr>';
//     for ($p = 0; $p < count($data); $p++) {
//     echo '<td style="' . $style . '">' . $data[$p] . '</td>';
//     echo '</tr>';
// }
// echo '</tbody></table>';

// while($str = fgets($openfile)) {
//     echo "<tr>";
//     for ($i=0;$i<count($str);$i++) {
//         echo "<td>" . $str[$i] . "</td>";
//     }
//     echo "</tr>";
// }
echo "</table>";

// ファイルを閉じる
fclose($openFile);


?>

<html>
<!-- <table>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>年齢</th>
                <th>こだわり</th>
                <th>似合う色やファッションを知っているか</th>
                <th>似合うファッションをしたいか</th>
                <th>ファッションにおける不満</th>
            </tr>
</table>             -->

</html>