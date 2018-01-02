
  <div class="row">
    <div class="col">

<div class="text-center">
<?php if ($pagedata['page_image'] == null) { ?>
	<img src="resources/images/noimage.jpg" class="img-thumbnail" alt="...">
<?php } else { ?>
<img src="<?php echo $pagedata['page_image'];?>" class="img-thumbnail" alt="...">  
<?php } ?>

</div>

    </div>
    <div class="col-6">

	<h1 class="display-5"><?php echo $pagedata['first_name'];?>&nbsp;<?php echo $pagedata['last_name'];?>&nbsp;<?php //echo $pagedata['date'];?></h1>




<table class="table">
  <thead>
    <tr>

    </tr>
  </thead>
  <tbody>
    <tr>

      <td>Имя:</td>
      <td><?php echo $pagedata['first_name'];?></td>
      <td></td>
	  <td></td>
    </tr>
    <tr>

      <td>Фамилия:</td>
      <td><?php echo $pagedata['last_name'];?></td>
      <td></td>
	  <td></td>

    </tr>

	    <tr>

      <td>Телефон:</td>
      <td><?php echo $pagedata['phone'];?></td>
      <td></td>
	  <td></td>
    </tr>
	    <tr>

      <td>E-mail:</td>
      <td><?php echo $pagedata['email'];?></td>
      <td></td>
	  <td></td>
     </tr>
	    <tr>

      <td>О Себе:</td>
      <td> <p class="lead"><?php echo $pagedata['about'];?></p>
	  </td>
      <td></td>
	  <td></td>
    </tr>
  </tbody>
</table>


    </div>
    <div class="col">

    </div>
  </div>
  
  
  
    <div class="row">
    <div class="col">

    </div>
    <div class="col-6">

    </div>
    <div class="col">

    </div>
  </div>



