<?php 
$menu = Router::getMenu("menu_acl");
$currentPage = currentPage();
?>
<!-- Header -->
<header id="main-header">
    <div class="inner-header">
        <div class="logo">
            <p><a href="<?php echo FROOT; ?>">JOB FINDER BD</a></p>
        </div>

        <div class="main-menu">
            <ul>
                <?php foreach($menu as $key => $val) :
                   $active = ''; ?>
                <?php  if(is_array($val)) : ?>
                    <li><a href=""><?php echo $key; ?></a>
                        <ul class="dropdown">
                            <?php foreach($val as $k => $v):
                             $active = ($v == $currentPage) ? 'active' : '';
                                ?>
                                <?php if(substr($k,0,9) == "separator") : ?>
                                    <li role="separator" class="divider"></li>
                                <?php else: ?>
                                    <li><a class="<?php echo $active; ?>" href="<?php echo $v;?>"><?php echo $k; ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </li>
                <?php else :
                    $active = ($val == $currentPage) ? 'active' : '';    ?>
                        <li><a class="<?php echo $active; ?>" href="<?php echo $val;?>"><?php echo $key; ?></a></li>
                <?php endif;?>
                <?php endforeach; ?>
            </ul>

            <a href="#" class="text-right" style="text-decoration: none;color:#fff;margin-top:5px;">Hello <?php if(!empty(currentUser()->fname)) {echo currentUser()->fname; } ?></a>
        </div>


    </div><!--  inner-header -->
</header>      <!-- End Header -->