Name: <input type="text" name="name" value="<?php echo $name;?>">
Price: <input type="text" name="email" value="<?php echo $email;?>">
Description: <textarea name="description" rows="5" cols="40"><?php echo $description;?></textarea>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

On Shop:
<input type="radio" name="shop"
<?php if (isset($shop) && $shop=="True") echo "checked";?>
value="True">Yes
<input type="radio" name="shop"
<?php if (isset($shop) && $shop=="False") echo "checked";?>
value="False">No

Sold:
<input type="radio" name="sold"
<?php if (isset($sold) && $sold=="True") echo "checked";?>
value="True">Yes
<input type="radio" name="shop"
<?php if (isset($sold) && $sold=="False") echo "checked";?>
value="False">No