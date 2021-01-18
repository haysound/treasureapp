<fieldset>

<div class="form-group col-sm-2">
        <label>Title</label>
           <?php //$opt_arr = get_countries();
           $db = getDbInstance();
           $select = "title";
           $opt_arr = $db->get('titles', null, $select);
                            ?>
            <select name="title" id="title" class="form-control selectpicker" required>
                <option value="">Select Title</option>
                <?php
                 //echo '<option value="'.$opt['title'].'"' . $sel . '>' . $opt['title'] . '</option>';
                foreach ($opt_arr as $opt) {

                    if ($edit && $opt['title'] == $member['title']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['title'].'"' . $sel . '>' . $opt['title'] . '</option>';
                }

                ?>
            </select>
    </div>

    <div class="form-group col-sm-3">
        <label for="surname">Surname</label>
        <input type="text" name="surname" value="<?php echo $edit ? $member['surname'] : ''; ?>" placeholder="Surname" class="form-control" required="required" id="surname" autocomplete="off">
    </div>
    <div class="form-group col-sm-3">
        <label for="othernames">Othernames</label>
          <input type="text" name="othernames" value="<?php echo $edit ? $member['othernames'] : ''; ?>" placeholder="Othernames" class="form-control" required="required" id = "othernames" autocomplete="off">
    </div>

    <div class="form-group col-sm-4">
        <label for="email">Email Address</label>
            <input  type="email" name="email" value="<?php echo $edit ? $member['email'] : ''; ?>" placeholder="E-Mail Address" class="form-control" id="email" autocomplete="off">
    </div>

    <div class="form-group col-sm-2">
        <label for="phone">Mobile Number</label>
            <input name="phone" value="<?php echo $edit ? $member['mobile_no'] : ''; ?>" placeholder="Mobile Number" class="form-control"  type="text" id="phone" autocomplete="off" required>
    </div>

    <div class="form-group col-sm-2">
        <label>Date of birth</label>
        <input name="dob" id="dob" value="<?php echo $edit ? $member['dob'] : ''; ?>"  placeholder="Birth of Date" class="form-control"  type="date" autocomplete="off" required>
    </div>
    <div class="form-group col-sm-2">
        <label>Gender</label>
           <?php $opt_arr = array("Female", "Male");
                            ?>
            <select name="sex" id="sex" class="form-control selectpicker" required>
                <option value="">Select Gender</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt == $member['sex']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt.'"' . $sel . '>' . $opt . '</option>';
                }

                ?>
            </select>
    </div>

    <div>

    </div>
    <div class="form-group col-sm-2">
        <label>Nationality</label>
           <?php
           $db = getDbInstance();
           $select = "Country";
           $opt_arr = $db->get('countries', null, $select);
                            ?>
            <select name="country" id="country" class="form-control selectpicker" required>
                <option value="">Select Country</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt['Country'] == $member['country']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['Country'].'"' . $sel . '>' . $opt['Country'] . '</option>';
                }

                ?>
            </select>
    </div>
    <div class="form-group col-sm-2">
        <label>State of Origin</label>
        <?php
           $select = "StateName";
           //$db->where("CountryName", $member['country']);
           $opt_arr = $db->get('state_tbl', null, $select);
                            ?>
                <select name="state" id="state" class="form-control selectpicker">
                <option value="">Select State</option>
                <?
                 foreach ($opt_arr as $opt) {
                if ($edit && $opt['StateName'] == $member['State_origin']) {
                        $sel = "selected";

                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['StateName'].'"' . $sel . '>' . $opt['StateName'] . '</option>';
                }
                    ?>
            </select>
    </div>

    <div class="form-group col-sm-2">
        <label>LGA of Origin</label>
          <?php
                $db = getDbInstance();
                $select = "LocalName";
                //$db->where("StateCode", $_POST['state_id']);
                $opt_arr = $db->get('localga', null, $select);
            ?>
            <select name="lga" id="lga" class="form-control selectpicker"DDDDD>
                <option value="">Select LGA</option>
                <?
                foreach($opt_arr as $opt) {
                if ($edit && $opt['LocalName'] == $member['lga']) {
                        $sel = "selected";

                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['LocalName'].'"' . $sel . '>' . $opt['LocalName'] . '</option>';
                }
                    ?>
            </select>
    </div>
    <div class="form-group col-sm-2">
        <label>Band</label>
           <?php $db = getDbInstance();

           $select = "Name";
           $db->orderBy('Name','asc');
           $opt_arr = $db->get('band_tbl', null, $select);
                            ?>
            <select name="band" id="band" class="form-control selectpicker" required>
                <option value=" " >Select Band</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt['Name'] == $member['current_band']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['Name'].'"' . $sel . '>' . $opt['Name'] . '</option>';
                }

                ?>
            </select>
    </div> 
    <div class="form-group col-sm-2">
        <label>Post in Band</label>
        <?php $db = getDbInstance();

$select = "BandPost";
$db->orderBy('BandPost','asc');
$opt_arr = $db->get('bandposts_tbl', null, $select);
                 ?>
            <select name="bandpost" id="bandpost" class="form-control selectpicker" required>
                <option value=" " >Please select your post</option>
                <?php
                foreach ($opt_arr as $opt) {
                    if ($edit && $opt['BandPost'] == $member['post_held']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['BandPost'].'"' . $sel . '>' . $opt['BandPost'] . '</option>';
                }

                ?>
            </select>
    </div>
    <div class="form-group col-sm-2">
        <label>District</label>
        <?php
           //$db = getDbInstance();
          // $select = "Country";
           $districts = $db->get('districtciruitbranches',null,'distinct District');
                            ?>
            <select name="districts" id="districts" class="form-control selectpicker" required>
                <option value="">Select District</option>
                <?php
                foreach ($districts as $opt) {
                    if ($edit && $opt['District'] == $member['district']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['District'].'"' . $sel . '>' . $opt['District'] . '</option>';
                }

                ?>
            </select>
    </div>
    <div class="form-group col-sm-2">
        <label>Circuit</label>
        <?php
           //$db = getDbInstance();
          // $select = "Country";
           $circuit = $db->get('districtciruitbranches',null,'distinct circuit');
                            ?>
                <select name="circuits" id="circuits" class="form-control selectpicker" required>
                <option value="">Select Circuit</option>
                <?php
                foreach ($circuit as $opt) {
                    if ($edit && $opt['circuit'] == $member['circuit']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['circuit'].'"' . $sel . '>' . $opt['circuit'] . '</option>';
                }

                ?>
            </select>
    </div>

    <div class="form-group col-sm-2">
        <label>Branch</label>
        <?php
           //$db = getDbInstance();
          // $select = "Country";
           $branch = $db->get('districtciruitbranches',null,'distinct Branch');
                            ?>
            <select name="branches" id="branches" class="form-control selectpicker" required>
                <option value="">Select Branch</option>
                <?php
                foreach ($branch as $opt) {
                    if ($edit && $opt['Branch'] == $member['branchname']) {
                        $sel = "selected";
                    } else {
                        $sel = "";
                    }
                    echo '<option value="'.$opt['Branch'].'"' . $sel . '>' . $opt['Branch'] . '</option>';
                }

                ?>
            </select>
    </div>

</fieldset>
<div class="form-group text-center">
        <label></label>
        <button type="submit" class="btn btn-success" >Save Member Info <span class="glyphicon glyphicon-send"></span></button>
</div>