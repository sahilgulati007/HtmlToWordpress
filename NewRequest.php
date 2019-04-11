<?php
/*
Template Name: newRequestFrom
Template Post Type: page
*/
    ?>

<?php get_header(); ?>
<form name="frm" id="frm" action="#" method="post">
    <table>
        <thead>
        <tr>
            <th></th>
            <th></th>
        </tr>
        </thead>
        <tbody>

            <tr>
                <td>Title:</td>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <td>Description:</td>
                <td><input type="text" name="desc"></td>
            </tr>
            <tr>
                <td>Request Type:</td>
                <td><select name="req">
                        <option value="developer">Location</option>
                        <option value="designer">Category</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Latitude:</td>
                <td><input type="text" name="lat"></td>
            </tr>
            <tr>
                <td>Longitude:</td>
                <td><input type="text" name="long"></td>
            </tr>
            <tr>
                <td>Category:</td>
                <td><select name="cat">
                        <option value="Nature">Nature</option>
                        <option value="Animal">Animal</option>
                        <option value="People">People</option>
                        <option value="Bulding">Bulding</option>
                        <option value="Food & Drink">Food & Drink</option>
                        <option value="Health & Beauty">Health & Beauty</option>
                        <option value="Industry">Industry</option>
                        <option value="Lifestyle">Lifestyle</option>
                        <option value="Sport & OutDoor">Sport & OutDoor</option>
                        <option value="Transportation">Transportation</option>
                        <option value="Transportation">Miscellaneous</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Email on submits :</td>
                <td><select name="eos">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><button type="submit" name="addData">Insert</button></td>
            </tr>

        </tbody>
    </table>
</form>
<?php
if(isset($_POST['addData'])){
    global $wpdb;
    $t=$_POST['title'];
    $d=$_POST['desc'];
    $r=$_POST['req'];
    $lat=$_POST['lat'];
    $long=$_POST['long'];
    $c=$_POST['cat'];
    $eos=$_POST['eos'];
    $table_name = $wpdb->prefix . 'photo_list';

    $wpdb->insert(
        $table_name,
        array(
            'ptype' => $r,
            'ptitle' => $t,
            'pdesc' => $d,
            'pcategory'=>$c,
            'platitude'=>$lat,
            'plongitude'=>$long,
            'pcreated'=>date('Y/m/d'),
            'pstatus'=>'active',
            'imagesubmit'=>'0',
            'eos'=>$eos,
        )
    );
    echo "inserted";
}
?>
<?php get_footer(); ?>


