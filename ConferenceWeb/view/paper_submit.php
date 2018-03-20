<script>
    var a = <?php echo json_encode($subareasAll); ?>;
    function changeArea(value) {
        var filtered = a.filter(function (el) {
            return (el.areaID == value);
        });
        filtered.forEach(function (item, index, arr) {
            arr[index] = "<option value=" + item.subareaID +">" + item.subareaName + "</option>" ;
            document.getElementById("subarea_id").innerHTML = filtered;
        });
        /*
        var sel = document.getElementById('subarea_id');
        sel.options.length = 0;
        for(var i = 0; i < filtered.length; i++) {
            var opt = document.createElement('option');
            opt.innerHTML = filtered[i]['subareaName'];
            //opt.textContent = filtered[i]['subareaName'];
            opt.value = filtered[i]['subareaID'];
            sel.appendChild(opt);
        }
        */
    }
</script>
<section>
    <h1>
        Paper Submission
    </h1>
</section>
<section>
    <form action="#" method="post" enctype="multipart/form-data">
    <fieldset>
        <legend>Paper Information</legend>
        <p>
            <label>Author Name:</label>
            <input type="text" name="author_name" value="<?php echo htmlspecialchars($authorName);?>">
            <?php echo $fields->getField('author_name')->getHTML(); ?>
        </p>
        <p>
            <label>Title:</label>
            <input type = "text" name = "title" value="<?php echo htmlspecialchars($title);?>">
            <?php echo $fields->getField('title')->getHTML(); ?>
        </p>
        <p>
            <label>Area:</label>
            <select name="area_id" onchange="changeArea(this.value);">
            <?php foreach ($areas as $area) : ?>
                <option value="<?php echo $area->getAreaID(); ?>" <?php if ($area->getAreaID()==$area_id) { echo 'selected'; } ?> >
                    <?php echo $area->getAreaName(); ?>
                </option>
            <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label>Sub Area:</label>
            <select id="subarea_id" name="subarea_id">
            <?php foreach ($subareas as $subarea) : ?>
                <option value="<?php echo $subarea->getSubareaID(); ?>" <?php if ($subarea->getSubareaID()==$subarea_id) { echo 'selected'; } ?> >
                    <?php echo $subarea->getSubareaName(); ?>
                </option>
            <?php endforeach; ?>
            </select>
        </p>
        <p>
            <label>&nbsp;</label>
            <input type="file" name="fileName">
            <?php echo $fields->getField('file_Name')->getHTML(); ?>
        </p>
        <p>            
            <label>&nbsp;</label>
            <input type="submit" name="action" value="Upload">
        </p>
    </fieldset>
    </form>
</section>