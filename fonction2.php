
<?php
function img_add(string $class_img, $url, $nb_img = 7) : void {
    for ($i = 1; $i < $nb_img; $i++){
echo <<<HTML

    <div class="p-0">
    <img class="$class_img" src="$url$i.jpg" alt="#">
</div>
HTML;
}
}
?>
<?php   
function add_menu(string $class_item, string $class_link, string $link_url, string $title)
{
return <<<HTML
    <li class="$class_item active">
    <a class="$class_link text-white" href="$link_url">$title</a>
</li>
HTML;
}
?>
<?php   
function add_list(string $class_link, string $link_url, string $text)
{
return <<<HTML
     <li><a class=" $class_link" href="$link_url">$text</a></li>
HTML;
}
?>
<?php 
function add_reseau(string $class_item, string $link_url, string $icon, string $data)
{
return <<<HTML
    <li class="$class_item"><a href="$link_url"><i class="$icon"
                        data-icon="$data"></i></a></li>
HTML;
}
?>
