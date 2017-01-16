
<? 
 include "../admin/tags_info.php";
 /* include "../tags_info.php"; */

   echo '<ul>';
     foreach ($tags as $i => $value) {
           echo '<li><a href="'.$tags[$i]["href"].'" class=" '.$tags[$i]["class"].' tooltip-tag" data-tooltip-content="#tooltip_claud_tag_'.$tags[$i]["number"].'"><img src=" '.$tags[$i]["img"].' "></a></li>';
      }
    echo '</ul>'; 

    echo '<div class="tooltip_templates">'; 
      
        foreach ($tags as $i => $value) {
          echo '<span id="tooltip_claud_tag_'.$tags[$i]["number"].'" class="tooltip_cloud_tag" >';
           echo '<span>'.$tags[$i]["tooltip"].'</span>';
          echo '</span>'; 
        }
      
    echo '</div>';
?>