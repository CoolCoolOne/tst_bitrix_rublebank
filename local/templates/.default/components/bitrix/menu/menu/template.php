<?php 

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); 
if (empty($arResult['ALL_ITEMS'])) return; 

?> 

<div class="links-nav"> 
    <ul> 
        <?php foreach ($arResult['ALL_ITEMS'] as $arItem): ?> 
            <?php if ($arItem['SELECTED']) : ?> 
                <li class="active"><a href="<?php echo $arItem['LINK']; ?>"><?php echo $arItem['TEXT']; ?></a></li> 
            <?php else: ?> 
                <li><a href="<?php echo $arItem['LINK']; ?>"><?php echo $arItem['TEXT']; ?></a></li> 
            <?php endif; ?> 
        <?php endforeach; ?> 
    </ul>  
</div>
