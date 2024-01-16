<?php
if (!empty($_SESSION['ID'])) {
    $pdo = connectionPDO('localhost', 'root', 'root', 'global');

    $sql = 'SELECT count(*) as count from global.users;';
    $resulta = executeSql($sql, $pdo);
    $listP = '';

    for ($i = 0; $i < $resulta[0]['count']; $i++) {
        $sql = 'SELECT userID, userPseudo, userRole, userFla, userArka, userColor from global.users;';
        $result = executeSql($sql, $pdo);

        $ID = $result[$i]['userID'];
        $pseudo = $result[$i]['userPseudo'];
        $role = $result[$i]['userRole'];
        $fla = $result[$i]['userFla'];
        $arka = $result[$i]['userArka'];
        $color = $result[$i]['userColor'];

        $listP .= '<div id="user' . $ID . '" class="users flex column centerV spaceAround" style="border-color: ' . $color . ';">
        <img src="./Users/Avatars/' . $ID . '.png" alt="avatar' . $ID . '">
        <div>
            <p>pseudo: ' . $pseudo . '</p>
            <p>role: ' . $role . '</p>
            <p>fla: ' . $fla . '<img id="fla" src="' . $flaImg . '" alt="fla"></p>
            <p>arka: ' . $arka . '</p>
        </div>
        <button>more</button>
        </div>';
    }
}
