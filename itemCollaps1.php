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
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#collapseOne">
                 Collapsible Group Item #1
             </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit,
                enim eiusmod high life accusamus terry richardson ad squid.
            </div>
        </div>
    </div>

    <!-- Second Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#collapseTwo">
                 Collapsible Group Item #2
             </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit,
                enim eiusmod high life accusamus terry richardson ad squid.
            </div>
        </div>
    </div>

    <!-- Third Panel -->
    <div class="panel panel-default">
        <div class="panel-heading">
             <h4 class="panel-title"
                 data-toggle="collapse"
                 data-target="#collapseThree">
                 Collapsible Group Item #3
             </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse">
            <div class="panel-body">
                Anim pariatur cliche reprehenderit,
                enim eiusmod high life accusamus terry richardson ad squid.
            </div>
        </div>
    </div>
</div>
<?php include'footer.php'; ?>
