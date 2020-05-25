
<?php $this->title = "Forum";?>
<?php ob_start(); ?>
<link href="/Web/css/forum.css" rel="stylesheet">
<?php $this->head_tags = ob_get_clean();?>
<?php if (isset($data)):?>

  <div id="body">
      <div>
          <form method="post" action="/forum/result-threads">
              <label>
                  <input type="text" autocomplete="off" class="search-input" placeholder="Rechercher des réponses..." tabindex="1" name="research">
              </label>
              <input type="submit" value="Rechercher" name="search">
          </form>
      </div>
      <div>
          <article>
              <?php for ($i=0;$i<count($data['tags_info']);$i++):?>
                  <?php $idTag=$data['tags_info'][$i]->ID_Tag?>
                  <a href="/forum/tag-<?php echo $idTag?>"><h1 class="titleTag"><?php echo $data['tags_info'][$i]->Tag_Title; ?></h1></a>
                  <p class="textTag"><?php echo $data['tags_info'][$i]->Tag_description; ?></p>
                  <p class="nbThreads">Il y a <?php echo $data['nbThreads'][$i]?> sujets !</p>
                  <p class="nbReplies">Il y a <?php echo $data['nbReplies'][$i]?> réponses !</p>
              <?php endfor; ?>
          </article>
      </div>


  </div>
<?php endif; ?>
