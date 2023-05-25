<?php 
include 'admin/db_connect.php'; 
?>
<style>
#portfolio .img-fluid{
    width: calc(100%);
    height: 30vh;
    z-index: -1;
    position: relative;
    padding: 1em;
}
.vacancy-list{
cursor: pointer;
}
span.hightlight{
    background: yellow;
}
</style>
        <header class="masthead">
            <style>
              header.masthead {
    background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url(admin/assets/img/1685005740_pexels-judita-tamošiūnaitė-2026764.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
            <div class="container-fluid h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-8 align-self-end mb-4 page-title">
                    	<h3 class="text-white">Work with us <?php echo $_SESSION['setting_name']; ?></h3>
                        <hr class="divider my-4" />
                        <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="./index.php">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="./with us.php">Work with us</a></li>

                    </ol>
                </nav>                      
                    </div>
                    
                </div>
            </div>
        </header>
        <section class="bg-light">
        
        <div class="first bg-light">
                  <h2>Join our team</h2>
            <p>We are always on the lookout for the best Disability Support Workers and Community Nurses. Our
                culture is all about creating a safe space for the whole team. Our values are respect, inclusion, and
                friendly support. If you think you’d be a great fit, we would love to hear from you.</p>
        </div>
    </section>
               </div> 
        <section id="list">
            <div class="container mt-3 pt-2">
                <h4 class="text-center">Our Current Vacancy</h4>
                <hr class="divider">
                
                <?php
                $vacancy = $conn->query("SELECT * FROM vacancy order by date(date_created) desc ");
                while($row = $vacancy->fetch_assoc()):
                    $trans = get_html_translation_table(HTML_ENTITIES,ENT_QUOTES);
                    unset($trans["\""], $trans["<"], $trans[">"], $trans["<h2"]);
                    $desc = strtr(html_entity_decode($row['description']),$trans);
                    $desc=str_replace(array("<li>","</li>"), array("",","), $desc);
                ?>
                <div class="card vacancy-list" data-id="<?php echo $row['id'] ?>">
                    <div class="card-body">
                        <h3><b class="filter-txt"><?php echo $row['position'] ?></b></h3>
                        <span><small>Needed: <?php echo $row['availability'] ?></small></span>
                        
                        <button class="btn"> Apply Now</button>
                    </div>
                </div>
                <br>
                <?php endwhile; ?>
            </div>
        </section>


<script>
    $('.card.vacancy-list').click(function(){
        location.href = "index.php?page=view_vacancy&id="+$(this).attr('data-id')
    })
    $('#filter').keyup(function(e){
        var filter = $(this).val()

        $('.card.vacancy-list .filter-txt').each(function(){
            var txto = $(this).html();
            txt = txto
            if((txt.toLowerCase()).includes((filter.toLowerCase())) == true){
                $(this).closest('.card').toggle(true)
            }else{
                $(this).closest('.card').toggle(false)
               
            }
        })
    })
</script>