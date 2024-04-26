<div id="body" class="flex centerV centerH fullHeight">
    <div id="div">
        <div class="flex">
            <div>
                <img id="avatar" src="<?= $userImg ?>" alt="avatar<?= $data['ID'] ?>">
            </div>
            <div>
                <table id="info">
                    <tr>
                        <th>
                            <p class="tHead">role:</p>

                        </th>
                        <td>
                            <p class="tText" id="textRole"><?= $data['role'] ?></p>
                            <select name="selectRole" id="selectRole" onchange="selectChange()">
                                <?php foreach ($roles as $role) : ?>
                                    <option id="<?= $role->roleName ?>" value="<?= $role->roleName ?>" class=<?= ($data['role'] == $role->roleName) ? "red" . " selected" : "black" ?>><?= $role->roleName ?></option>
                                <?php endforeach ?>
                            </select>
                        </td>
                        <td>
                            <button class="editBtn" id="editBtnRole" onclick="edit(id)">
                                <svg viewBox="0 0 512 512">
                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                </svg>
                            </button>
                            <button class="saveBtn" id="saveBtnRole" value="test" onclick="save(id)">
                                <div></div>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p class="tHead">fla:</p>
                        </th>
                        <td class="flex centerV">
                            <p class="flex centerV tText" id="textFla"><?= $data['fla'] ?></p>
                            <input type="number" id="flaEdit" name="flaEdit" min="0" max="2147483647" placeholder="<?= $data['fla'] ?>"><img id="fla" src="<?= $flaImg ?>" alt="">
                        </td>
                        <td>
                            <button class="editBtn" id="editBtnFla" onclick="edit(id)">
                                <svg viewBox="0 0 512 512">
                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                </svg>
                            </button>
                            <button class="saveBtn" id="saveBtnFla" onclick="save(id)">
                                <div></div>
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <p class="tHead">arka:</p>
                        </th>
                        <td>
                            <p class="tText" id="textArka"><?= $data['arka'] ?></p>
                            <input type="number" id="arkaEdit" name="arkaEdit" min="0" max="2147483647" placeholder="<?= $data['arka'] ?>">
                        </td>
                        <td>
                            <button class="editBtn" id="editBtnArka" onclick="edit(id)">
                                <svg viewBox="0 0 512 512">
                                    <path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"></path>
                                </svg>
                            </button>
                            <button class="saveBtn" id="saveBtnArka" onclick="save(id)">
                                <div></div>
                            </button>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <table>
            <tr>
                <td>
                    <p class="tHead">username</p>
                    <p class="tText"><?= $data['pseudo'] ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="tHead">description</p>
                    <p class="tText"><?= (isset($data['description'])) ? $data['description'] : 'pas de description' ?></p>
                </td>
            </tr>
            <tr>
                <td>
                    <p class="tHead">couleur</p>
                    <div id="Color" style='background-color: <?= $data['color'] ?>;'></div>
                </td>
            </tr>
        </table>



    </div>
</div>