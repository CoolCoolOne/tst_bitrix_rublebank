<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if ($arResult["ITEMS"]):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<section class="section-review">
        <div class="container">
            <p class="zagolovok-section-card">
                
            </p>
            <div class="review-card" id= "<?php $this -> GetEditAreaId($arItem['ID']);?>">
				<?php  foreach ($arResult['ITEMS'] as $arItem):?>
				<div class="review">
					<div class="username-review">
						<i class="fa-solid fa-user"></i>
						<span class="username"><?php echo $arItem["NAME"];?></span>

					</div>
					<span class="text-review">
						<?php echo $arItem["PREVIEW_TEXT"];?>
					</span>
				</div>
				<?php  endforeach;?>
			</div>
        </div>
    </section>
<?php endif;?>