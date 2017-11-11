<?php include'header.php'; ?>
<style>
.panel-title:hover {
     cursor: pointer;
}
</style>
<button id="collapse-init" class="btn btn-primary">
    Disable accordion behavior
</button>
<br/><br/>

<div class="panel-group" id="accordion">
    <!-- First Panel -->
    <?php $iteam = [1,2,3,4,5,6,7,8];

    foreach ($iteam as $key => $i) {?>

    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#collapse<?php echo$i?>">
                 Collapsible Group Item #1
             </h4>
        </div>
        <div id="collapse<?php echo$i?>" class="panel-collapse collapse">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit,
                enim eiusmod high life accusamus terry richardson ad squid.
            </div>
        </div>
    </div>
    <?php    } ?>
</div>
<?php include'footer.php'; ?>
