<div class="breadcrumb-wrapper" id="breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?php the_title();?></h1>
                <ol class="breadcrumb">
                    <li> <a href="./">Home </a></li>
                    
                    <?php if(!is_page_template()){?>
                        <li class="active">Service</li>
                    <?php } ;?>
                    
                    <li class="active"><?php the_title();?></li>
                </ol>
            </div>
        </div>
    </div>
</div>