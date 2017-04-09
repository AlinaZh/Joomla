<?php

// Template parameters

$templateStyles 				    				= $this->params->get('templateStyles');
$maxWidth														= $this->params->get('maxWidth');
$googleFont	                        = $this->params->get('googleFont');
$showBacktotop											= $this->params->get('showBacktotop');
$bodyBgColor				        				= $this->params->get('bodyBgColor');
$bodyBgImage                        = $this->params->get('bodyBgImage');
$bodyBgRepeat			            			= $this->params->get('bodyBgRepeat');
$articleTitleColor		            	= $this->params->get('articleTitleColor');
$articleTitleLinkColor							= $this->params->get('articleTitleLinkColor');
$articleTitleLinkHoverColor		   		= $this->params->get('articleTitleLinkHoverColor');
$articleTitleFontSize			    			= $this->params->get('articleTitleFontSize');
$articleTitleLineHeight							= $this->params->get('articleTitleLineHeight');
$moduleTitleColor			        			= $this->params->get('moduleTitleColor');
$moduleTitleFontSize								= $this->params->get('moduleTitleFontSize');
$moduleTitleLineHeight							= $this->params->get('moduleTitleLineHeight');
$navColor														= $this->params->get('navColor');
$navBgColor													= $this->params->get('navBgColor');
$navActiveColor					    				= $this->params->get('navActiveColor');
$paragraphColor					    				= $this->params->get('paragraphColor');
$paragraphFontSize		            	= $this->params->get('paragraphFontSize');
$paragraphLineHeight								= $this->params->get('paragraphLineHeight');
$buttonColor				        				= $this->params->get('buttonColor');
$buttonBgColor											= $this->params->get('buttonBgColor');
$buttonBorderColor		            	= $this->params->get('buttonBorderColor');
$buttonHoverColor			        			= $this->params->get('buttonHoverColor');
$buttonBgHoverColor									= $this->params->get('buttonBgHoverColor');
$buttonBorderHoverColor							= $this->params->get('buttonBorderHoverColor');
$linkColor						    					= $this->params->get('linkColor');
$linkColorHover					    				= $this->params->get('linkColorHover');
$listColor						    					= $this->params->get('listColor');
$basicMenuColor 				    				= $this->params->get('basicMenuColor');
$basicMenuBgColor 		            	= $this->params->get('basicMenuBgColor');

$advertBgColor											= $this->params->get('advertBgColor');
$advertBgImage 					    				= $this->params->get('advertBgImage');
$advertBgRepeat 				    				= $this->params->get('advertBgRepeat');
$advertColor				        				= $this->params->get('advertColor');
$advertTitleColor			        			= $this->params->get('advertTitleColor');
$advertLinkColor				    				= $this->params->get('advertLinkColor');
$advertLinkHoverColor 							= $this->params->get('advertLinkHoverColor');
$slideBgColor			            			= $this->params->get('slideBgColor');
$slideBgImage 											= $this->params->get('slideBgImage');
$slideBgRepeat 					    				= $this->params->get('slideBgRepeat');
$slideColor					        				= $this->params->get('slideColor');
$slideTitleColor				    				= $this->params->get('slideTitleColor');
$slideLinkColor					    				= $this->params->get('slideLinkColor');
$slideLinkHoverColor 			    			= $this->params->get('slideLinkHoverColor');
$introBgColor			            			= $this->params->get('introBgColor');
$introBgImage 											= $this->params->get('introBgImage');
$introBgRepeat 					    				= $this->params->get('introBgRepeat');
$introColor					        				= $this->params->get('introColor');
$introTitleColor				    				= $this->params->get('introTitleColor');
$introLinkColor					    				= $this->params->get('introLinkColor');
$introLinkHoverColor 			    			= $this->params->get('introLinkHoverColor');
$showcaseBgColor				    				= $this->params->get('showcaseBgColor');
$showcaseBgImage 			        			= $this->params->get('showcaseBgImage');
$showcaseBgRepeat 		            	= $this->params->get('showcaseBgRepeat');
$showcaseColor											= $this->params->get('showcaseColor');
$showcaseTitleColor									= $this->params->get('showcaseTitleColor');
$showcaseLinkColor		            	= $this->params->get('showcaseLinkColor');
$showcaseLinkHoverColor 						= $this->params->get('showcaseLinkHoverColor');
$promoBgColor			            			= $this->params->get('promoBgColor');
$promoBgImage 											= $this->params->get('promoBgImage');
$promoBgRepeat 					    				= $this->params->get('promoBgRepeat');
$promoColor					        				= $this->params->get('promoColor');
$promoTitleColor				    				= $this->params->get('promoTitleColor');
$promoLinkColor					    				= $this->params->get('promoLinkColor');
$promoLinkHoverColor 			    			= $this->params->get('promoLinkHoverColor');
$topBgColor					        				= $this->params->get('topBgColor');
$topBgImage 				        				= $this->params->get('topBgImage');
$topBgRepeat 			            			= $this->params->get('topBgRepeat');
$topColor														= $this->params->get('topColor');
$topTitleColor		                	= $this->params->get('topTitleColor');
$topLinkColor			            			= $this->params->get('topLinkColor');
$topLinkHoverColor 									= $this->params->get('topLinkHoverColor');
$maintopBgColor					    				= $this->params->get('maintopBgColor');
$maintopBgImage 				    				= $this->params->get('maintopBgImage');
$maintopBgRepeat 			        			= $this->params->get('maintopBgRepeat');
$maintopColor			            			= $this->params->get('maintopColor');
$maintopTitleColor		            	= $this->params->get('maintopTitleColor');
$maintopLinkColor			        			= $this->params->get('maintopLinkColor');
$maintopLinkHoverColor 							= $this->params->get('maintopLinkHoverColor');
$mainbottomBgColor		            	= $this->params->get('mainbottomBgColor');
$mainbottomBgImage 									= $this->params->get('mainbottomBgImage');
$mainbottomBgRepeat 								= $this->params->get('mainbottomBgRepeat');
$mainbottomColor				    				= $this->params->get('mainbottomColor');
$mainbottomTitleColor			    			= $this->params->get('mainbottomTitleColor');
$mainbottomLinkColor								= $this->params->get('mainbottomLinkColor');
$mainbottomLinkHoverColor 		    	= $this->params->get('mainbottomLinkHoverColor');
$bottomBgColor											= $this->params->get('bottomBgColor');
$bottomBgImage 					    				= $this->params->get('bottomBgImage');
$bottomBgRepeat 				    				= $this->params->get('bottomBgRepeat');
$bottomColor				        				= $this->params->get('bottomColor');
$bottomTitleColor			        			= $this->params->get('bottomTitleColor');
$bottomLinkColor				    				= $this->params->get('bottomLinkColor');
$bottomLinkHoverColor 							= $this->params->get('bottomLinkHoverColor');
$userBgColor				        				= $this->params->get('userBgColor');
$userBgImage 			            			= $this->params->get('userBgImage');
$userBgRepeat 											= $this->params->get('userBgRepeat');
$userColor		                    	= $this->params->get('userColor');
$userTitleColor					    				= $this->params->get('userTitleColor');
$userLinkColor											= $this->params->get('userLinkColor');
$userLinkHoverColor 								= $this->params->get('userLinkHoverColor');
$footerBgColor											= $this->params->get('footerBgColor');
$footerBgImage 					    				= $this->params->get('footerBgImage');
$footerBgRepeat 				    				= $this->params->get('footerBgRepeat');
$footerColor				        				= $this->params->get('footerColor');
$footerTitleColor			        			= $this->params->get('footerTitleColor');
$footerLinkColor				    				= $this->params->get('footerLinkColor');
$footerLinkHoverColor 							= $this->params->get('footerLinkHoverColor');
$showCopyright											= $this->params->get('showCopyright');
$copyrightText											= $this->params->get('copyrightText');
$copyrightTextLink 									= $this->params->get('copyrightTextLink');
$copyrightColor					    				= $this->params->get('copyrightColor');
$copyrightFontSize		            	= $this->params->get('copyrightFontSize');
$copyrightLineHeight								= $this->params->get('copyrightLineHeight');
$copyrightPadding			        			= $this->params->get('copyrightPadding');
$copyrightMargin				    				= $this->params->get('copyrightMargin');
$copyrightBgColor			        			= $this->params->get('copyrightBgColor');
$copyrightBgImage 		            	= $this->params->get('copyrightBgImage');
$copyrightBgRepeat 									= $this->params->get('copyrightBgRepeat');
$copyrightTitleColor								= $this->params->get('copyrightTitleColor');
$copyrightLinkColor									= $this->params->get('copyrightLinkColor');
$copyrightLinkHoverColor 						= $this->params->get('copyrightLinkHoverColor');
$debugBgColor			            			= $this->params->get('debugBgColor');
$debugBgImage 											= $this->params->get('debugBgImage');
$debugBgRepeat 					    				= $this->params->get('debugBgRepeat');
$debugColor					        				= $this->params->get('debugColor');
$debugTitleColor				    				= $this->params->get('debugTitleColor');
$debugLinkColor					    				= $this->params->get('debugLinkColor');
$debugLinkHoverColor 			    			= $this->params->get('debugLinkHoverColor');

$logoHeight					        				= $this->params->get('logoHeight');
$showDefaultLogo				    				= $this->params->get('showDefaultLogo');
$defaultLogo				        				= $this->params->get('defaultLogo');
$defaultLogoImgAlt 									= $this->params->get('defaultLogoImgAlt');
$defaultLogoPadding									= $this->params->get('defaultLogoPadding');
$defaultLogoMargin		            	= $this->params->get('defaultLogoMargin');
$showMediaLogo											= $this->params->get('showMediaLogo');
$mediaLogo						    					= $this->params->get('mediaLogo');
$mediaLogoImgAlt 			        			= $this->params->get('mediaLogoImgAlt');
$mediaLogoPadding			        			= $this->params->get('mediaLogoPadding');
$mediaLogoMargin				    				= $this->params->get('mediaLogoMargin');
$showTextLogo			            			= $this->params->get('showTextLogo');
$textLogo														= $this->params->get('textLogo');
$textLogoColor											= $this->params->get('textLogoColor');
$textLogoFontSize			        			= $this->params->get('textLogoFontSize');
$textLogoGoogleFont 								= $this->params->get('textLogoGoogleFont');
$textLogoLineHeight									= $this->params->get('textLogoLineHeight');
$textLogoPadding				    				= $this->params->get('textLogoPadding');
$textLogoMargin					    				= $this->params->get('textLogoMargin');
$showSlogan					        				= $this->params->get('showSlogan');
$slogan					            				= $this->params->get('slogan');
$sloganColor				        				= $this->params->get('sloganColor');
$sloganFontSize					    				= $this->params->get('sloganFontSize');
$sloganFontFamily			        			= $this->params->get('sloganFontFamily');
$sloganLineHeight			        			= $this->params->get('sloganLineHeight');
$sloganPadding											= $this->params->get('sloganPadding');
$sloganMargin			            			= $this->params->get('sloganMargin');

$showRetinaLogo 										= $this->params->get('showRetinaLogo');
$retinaLogo 												= $this->params->get('retinaLogo');
$retinaLogoHeight										= $this->params->get('retinaLogoHeight');
$retinaLogoWidth										= $this->params->get('retinaLogoWidth');
$retinaLogoImgAlt										= $this->params->get('retinaLogoImgAlt');
$retinaLogoPadding									= $this->params->get('retinaLogoPadding');
$retinaLogoMargin										= $this->params->get('retinaLogoMargin');
$mobileNavColor					    				= $this->params->get('mobileNavColor');
$paragraphMobileFontSize						= $this->params->get('paragraphMobileFontSize');
$articleMobileTitleFontSize		   		= $this->params->get('articleMobileTitleFontSize');
$moduleMobileTitleFontSize		    	= $this->params->get('moduleMobileTitleFontSize');
$mobileShowImages			        			= $this->params->get('mobileShowImages');
$mobileShowAdvert			        			= $this->params->get('mobileShowAdvert');
$mobileShowIntro1			        			= $this->params->get('mobileShowIntro1');
$mobileShowIntro2			        			= $this->params->get('mobileShowIntro2');
$mobileShowIntro3			        			= $this->params->get('mobileShowIntro3');
$mobileShowIntro4			        			= $this->params->get('mobileShowIntro4');
$mobileShowSlide1			        			= $this->params->get('mobileShowSlide1');
$mobileShowSlide2			        			= $this->params->get('mobileShowSlide2');
$mobileShowShowcase1								= $this->params->get('mobileShowShowcase1');
$mobileShowShowcase2								= $this->params->get('mobileShowShowcase2');
$mobileShowShowcase3								= $this->params->get('mobileShowShowcase3');
$mobileShowShowcase4								= $this->params->get('mobileShowShowcase4');
$mobileShowPromo1			        			= $this->params->get('mobileShowPromo1');
$mobileShowPromo2			        			= $this->params->get('mobileShowPromo2');
$mobileShowPromo3			        			= $this->params->get('mobileShowPromo3');
$mobileShowTop1					    				= $this->params->get('mobileShowTop1');
$mobileShowTop2					    				= $this->params->get('mobileShowTop2');
$mobileShowTop3					    				= $this->params->get('mobileShowTop3');
$mobileShowTop4					    				= $this->params->get('mobileShowTop4');
$mobileShowMaintop1									= $this->params->get('mobileShowMaintop1');
$mobileShowMaintop2									= $this->params->get('mobileShowMaintop2');
$mobileShowMaintop3									= $this->params->get('mobileShowMaintop3');
$mobileShowSidebar1									= $this->params->get('mobileShowSidebar1');
$mobileShowSidebar2									= $this->params->get('mobileShowSidebar2');
$mobileShowMainbottom1							= $this->params->get('mobileShowMainbottom1');
$mobileShowMainbottom2							= $this->params->get('mobileShowMainbottom2');
$mobileShowMainbottom3							= $this->params->get('mobileShowMainbottom3');
$mobileShowBottom1		            	= $this->params->get('mobileShowBottom1');
$mobileShowBottom2		            	= $this->params->get('mobileShowBottom2');
$mobileShowBottom3		            	= $this->params->get('mobileShowBottom3');
$mobileShowBottom4		            	= $this->params->get('mobileShowBottom4');
$mobileShowUser1				    				= $this->params->get('mobileShowUser1');
$mobileShowUser2				    				= $this->params->get('mobileShowUser2');
$mobileShowUser3				    				= $this->params->get('mobileShowUser3');
$mobileShowFooter1		            	= $this->params->get('mobileShowFooter1');
$mobileShowFooter2		            	= $this->params->get('mobileShowFooter2');
$mobileShowFooter3		            	= $this->params->get('mobileShowFooter3');
$mobileShowFooter4		            	= $this->params->get('mobileShowFooter4');
$mobileShowCopyright1			    			= $this->params->get('mobileShowCopyright1');
$mobileShowCopyright2			    			= $this->params->get('mobileShowCopyright2');
$mobileShowDebug				    				= $this->params->get('mobileShowDebug');

$sfx1TitleColor 				    		= $this->params->get('sfx1TitleColor');
$sfx1TitleBorderColor 				  = $this->params->get('sfx1TitleBorderColor');
$sfx1TitleIconColor 						= $this->params->get('sfx1TitleIconColor');
$sfx1TitleIconBgColor 					= $this->params->get('sfx1TitleIconBgColor');
$sfx1TitleIconLineHeight 				= $this->params->get('sfx1TitleIconLineHeight');
$sfx1TitleIconFontSize 					= $this->params->get('sfx1TitleIconFontSize');
$sfx1TitleIconPadding 					= $this->params->get('sfx1TitleIconPadding');
$sfx2TitleColor 				    		= $this->params->get('sfx2TitleColor');
$sfx2TitleBorderColor 				  = $this->params->get('sfx2TitleBorderColor');
$sfx2TitleIconColor 						= $this->params->get('sfx2TitleIconColor');
$sfx2TitleIconBgColor 					= $this->params->get('sfx2TitleIconBgColor');
$sfx2TitleIconLineHeight 				= $this->params->get('sfx2TitleIconLineHeight');
$sfx2TitleIconFontSize 					= $this->params->get('sfx2TitleIconFontSize');
$sfx2TitleIconPadding 					= $this->params->get('sfx2TitleIconPadding');
$sfx3TitleColor 				    		= $this->params->get('sfx3TitleColor');
$sfx3TitleBorderColor 				  = $this->params->get('sfx3TitleBorderColor');
$sfx3TitleIconColor 						= $this->params->get('sfx3TitleIconColor');
$sfx3TitleIconBgColor 					= $this->params->get('sfx3TitleIconBgColor');
$sfx3TitleIconLineHeight 				= $this->params->get('sfx3TitleIconLineHeight');
$sfx3TitleIconFontSize 					= $this->params->get('sfx3TitleIconFontSize');
$sfx3TitleIconPadding 					= $this->params->get('sfx3TitleIconPadding');
$sfx4TitleColor 				    		= $this->params->get('sfx4TitleColor');
$sfx4TitleBorderColor 				  = $this->params->get('sfx4TitleBorderColor');
$sfx4TitleIconColor 						= $this->params->get('sfx4TitleIconColor');
$sfx4TitleIconBgColor 					= $this->params->get('sfx4TitleIconBgColor');
$sfx4TitleIconLineHeight 				= $this->params->get('sfx4TitleIconLineHeight');
$sfx4TitleIconFontSize 					= $this->params->get('sfx4TitleIconFontSize');
$sfx4TitleIconPadding 					= $this->params->get('sfx4TitleIconPadding');
$sfx5TitleColor 				    		= $this->params->get('sfx5TitleColor');
$sfx5TitleBorderColor 				  = $this->params->get('sfx5TitleBorderColor');
$sfx5TitleIconColor 						= $this->params->get('sfx5TitleIconColor');
$sfx5TitleIconBgColor 					= $this->params->get('sfx5TitleIconBgColor');
$sfx5TitleIconLineHeight 				= $this->params->get('sfx5TitleIconLineHeight');
$sfx5TitleIconFontSize 					= $this->params->get('sfx5TitleIconFontSize');
$sfx5TitleIconPadding 					= $this->params->get('sfx5TitleIconPadding');
$sfx6TitleColor 				    		= $this->params->get('sfx6TitleColor');
$sfx6TitleBorderColor 				  = $this->params->get('sfx6TitleBorderColor');
$sfx6TitleIconColor 						= $this->params->get('sfx6TitleIconColor');
$sfx6TitleIconBgColor 					= $this->params->get('sfx6TitleIconBgColor');
$sfx6TitleIconLineHeight 				= $this->params->get('sfx6TitleIconLineHeight');
$sfx6TitleIconFontSize 					= $this->params->get('sfx6TitleIconFontSize');
$sfx6TitleIconPadding 					= $this->params->get('sfx6TitleIconPadding');
$sfx7Color 					        		= $this->params->get('sfx7Color');
$sfx7BgColor 			            	= $this->params->get('sfx7BgColor');
$sfx7TitleColor 				    		= $this->params->get('sfx7TitleColor');
$sfx7TitleIconColor 						= $this->params->get('sfx7TitleIconColor');
$sfx7TitleIconBgColor 					= $this->params->get('sfx7TitleIconBgColor');
$sfx7TitleIconLineHeight 				= $this->params->get('sfx7TitleIconLineHeight');
$sfx7TitleIconFontSize 					= $this->params->get('sfx7TitleIconFontSize');
$sfx7TitleIconPadding 					= $this->params->get('sfx7TitleIconPadding');
$sfx8Color 					        		= $this->params->get('sfx8Color');
$sfx8BgColor 			            	= $this->params->get('sfx8BgColor');
$sfx8TitleColor 				    		= $this->params->get('sfx8TitleColor');
$sfx8TitleIconColor 						= $this->params->get('sfx8TitleIconColor');
$sfx8TitleIconBgColor 					= $this->params->get('sfx8TitleIconBgColor');
$sfx8TitleIconLineHeight 				= $this->params->get('sfx8TitleIconLineHeight');
$sfx8TitleIconFontSize 					= $this->params->get('sfx8TitleIconFontSize');
$sfx8TitleIconPadding 					= $this->params->get('sfx8TitleIconPadding');
$sfx9Color 					        		= $this->params->get('sfx9Color');
$sfx9BgColor 			            	= $this->params->get('sfx9BgColor');
$sfx9TitleColor 				    		= $this->params->get('sfx9TitleColor');
$sfx9TitleIconColor 						= $this->params->get('sfx9TitleIconColor');
$sfx9TitleIconBgColor 					= $this->params->get('sfx9TitleIconBgColor');
$sfx9TitleIconLineHeight 				= $this->params->get('sfx9TitleIconLineHeight');
$sfx9TitleIconFontSize 					= $this->params->get('sfx9TitleIconFontSize');
$sfx9TitleIconPadding 					= $this->params->get('sfx9TitleIconPadding');

$analyticsCode											= $this->params->get('analyticsCode');

?>


<style type="text/css">

<?php // Maximum Width
if ($maxWidth) { ?>
	@media (min-width: 1200px) {
		.row-fluid { 
			max-width: <?php echo htmlspecialchars($maxWidth); ?>; 
		}
	}
<?php } ?>
<?php // Google Font Regular
if ($googleFont) { ?>
	h1, h2, h3,
	h4, h5, h6,
	.componentheading,
	dl.article-info,
	dt.article-info-term,
	.pagination ul li a,
	.pagination p.counter.pull-right,
	.categories-list h4.item-title,
	div.contact fieldset legend,
	div.blog-featured fieldset legend,
	div.search fieldset legend,
	.cat-children h3.page-header,
	div.k2Pagination ul li a,
	#k2FrontendEditToolbar h2,
	div.catItemHeader h3.catItemTitle,
	span.catItemHits,
	div.catItemCategory,
	div.catItemTagsBlock,
	div.catItemCommentsLink,
	div.itemHeader h2.itemTitle,
	div.itemToolbar ul li span.itemTextResizerTitle,
	div.itemToolbar ul li a.itemCommentsLink,
	div.itemToolbar ul li a.itemPrintLink span,
	div.itemToolbar ul li a.itemEmailLink span,
	div.itemRatingBlock span,
	div.itemRatingLog,
	span.itemHits,
	div.itemCategory,
	div.itemTagsBlock,
	div.itemRelCat,
	div.itemRelAuthor,
	div.itemNavigation a.itemNext,
	div.itemCommentsForm form label.formComment,
	div.itemCommentsForm form label.formName,
	div.itemCommentsForm form label.formEmail,
	div.itemCommentsForm form label.formUrl,
	div.tagItemHeader h2.tagItemTitle,
	div.tagItemCategory,
	div.userItemHeader h3.userItemTitle,
	div.userItemCategory,
	div.userItemTagsBlock,
	div.userItemCommentsLink,
	div.latestItemHeader h2.latestItemTitle,
	div.latestItemCategory,
	div.genericItemCategory span,
	div.genericItemCategory a,
	div.genericItemHeader h2.genericItemTitle,
	div.genericItemReadMore,
	div.profile legend,
	.hello,
	div.k2ItemsBlock ul li div.moduleItemTags b,
	span.itemNavigationTitle,
	div.k2ItemsBlock ul li a.moduleItemTitle,
	div.k2ItemsBlock ul li span.moduleItemDateCreated,
	div.k2ItemsBlock ul li a.moduleItemCategory,
	div.k2ItemsBlock ul li div.moduleItemTags,
	div.k2ItemsBlock ul li a.moduleItemComments,
	div.k2ItemsBlock ul li span.moduleItemHits,
	div.k2LatestCommentsBlock ul li span.lcUsername,
	div.k2LatestCommentsBlock ul li span.lcCommentDate,
	div.k2LatestCommentsBlock ul li span.lcItemTitle,
	div.k2LatestCommentsBlock ul li span.lcItemCategory,
	div.itemComments ul.itemCommentsList li span.commentDate,
	div.itemComments ul.itemCommentsList li span.commentAuthorName,
	div.k2UserBlock div.k2UserBlockDetails span.ubName,
	div.k2UsersBlock ul li a.ubUserName,
	.k2AccountPage th.k2ProfileHeading,
	#k2Container span.catItemAddLink a.modal,
	#k2Container span.userItemAddLink a.modal {
		font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFont'));?>', sans-serif;
		font-weight: 400;
	}
<?php } ?>
<?php // Body Background Color
if ($bodyBgColor) { ?>
	#fav-container { 
		background-color: #<?php echo htmlspecialchars($bodyBgColor); ?>; 
	}
<?php } ?>
<?php // Body Background Image
if ($bodyBgImage) { ?>
	#fav-containerwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($bodyBgImage); ?>);
	}
<?php } ?>
<?php // Body Background Image Repeat
if ($bodyBgRepeat) { ?>
	#fav-containerwrap { 
		background-repeat: <?php echo htmlspecialchars($bodyBgRepeat); ?>;
	}
<?php } ?>
<?php // Article Title Color
if ($articleTitleColor) { ?>
	.page-header h2, 
	h2.item-title,
	.blog-featured h2.item-title,
	.page-header h1,
	.componentheading,
	div.newsfeed-category h2,
	div.contact-category h2,
	div.weblink-category h2,
	#k2FrontendEditToolbar h2,
	div.itemListCategory h2,
	div.itemHeader h2.itemTitle,
	div.tagItemHeader h2.tagItemTitle,
	div.userBlock h2,
	div.latestItemsCategory h2,
	div.latestItemHeader h2.latestItemTitle,
	div.itemIsFeatured h2, 
	div.catItemIsFeatured h3, 
	div.userItemIsFeatured h3,
	div.catItemHeader h3.catItemTitle,
	div.itemCommentsForm h3,
	div.userItemHeader h3.userItemTitle,
	h3.itemAuthorName {
		color: #<?php echo htmlspecialchars($articleTitleColor); ?>; 
	}
<?php } ?>
<?php // Article Title Link Color
if ($articleTitleLinkColor) { ?>
	.page-header h2 a, 
	h2.item-title a,
	.blog-featured h2.item-title a,
	.page-header h1 a,
	.componentheading a,
	div.newsfeed-category h2 a,
	div.contact-category h2 a,
	div.weblink-category h2 a,
	#k2FrontendEditToolbar h2 a,
	div.itemListCategory h2 a,
	div.itemHeader h2.itemTitle a,
	div.tagItemHeader h2.tagItemTitle a,
	div.userBlock h2 a,
	div.latestItemsCategory h2 a,
	div.latestItemHeader h2.latestItemTitle a,
	div.itemIsFeatured h2 a, 
	div.catItemIsFeatured h3 a, 
	div.userItemIsFeatured h3 a,
	div.catItemHeader h3.catItemTitle a,
	div.itemCommentsForm h3 a,
	div.userItemHeader h3.userItemTitle a,
	h3.itemAuthorName a {
		color: #<?php echo htmlspecialchars($articleTitleLinkColor); ?>; 
	}
<?php } ?>
<?php // Article Title Link Hover Color
if ($articleTitleLinkHoverColor) { ?>
	.page-header h2 a:hover, 
	h2.item-title a:hover,
	.blog-featured h2.item-title a:hover,
	.page-header h1 a:hover,
	.componentheading a:hover,
	div.newsfeed-category h2 a:hover,
	div.contact-category h2 a:hover,
	div.weblink-category h2 a:hover,
	#k2FrontendEditToolbar h2 a:hover,
	div.itemListCategory h2 a:hover,
	div.itemHeader h2.itemTitle a:hover,
	div.tagItemHeader h2.tagItemTitle a:hover,
	div.userBlock h2 a:hover,
	div.latestItemsCategory h2 a:hover,
	div.latestItemHeader h2.latestItemTitle a:hover,
	div.itemIsFeatured h2 a:hover, 
	div.catItemIsFeatured h3 a:hover, 
	div.userItemIsFeatured h3 a:hover,
	div.catItemHeader h3.catItemTitle a:hover,
	div.itemCommentsForm h3 a:hover,
	div.userItemHeader h3.userItemTitle a:hover,
	h3.itemAuthorName a:hover {
		color: #<?php echo htmlspecialchars($articleTitleLinkHoverColor); ?>; 
	}
<?php } ?>
<?php // Article Title Font Size
if ($articleTitleFontSize) { ?>
	.page-header h2, 
	h2.item-title,
	.blog-featured h2.item-title,
	.page-header h1,
	.componentheading,
	div.newsfeed-category h2,
	div.contact-category h2,
	div.weblink-category h2,
	#k2FrontendEditToolbar h2,
	div.itemListCategory h2,
	div.itemHeader h2.itemTitle,
	div.tagItemHeader h2.tagItemTitle,
	div.userBlock h2,
	div.latestItemsCategory h2,
	div.latestItemHeader h2.latestItemTitle,
	div.itemIsFeatured h2, 
	div.catItemIsFeatured h3, 
	div.userItemIsFeatured h3,
	div.catItemHeader h3.catItemTitle,
	div.itemCommentsForm h3,
	div.userItemHeader h3.userItemTitle,
	h3.itemAuthorName {
		font-size: <?php echo htmlspecialchars($articleTitleFontSize); ?>; 
	}
<?php } ?>
<?php // Article Title Line Height
if ($articleTitleLineHeight) { ?>
	.page-header h2, 
	h2.item-title,
	.blog-featured h2.item-title,
	.page-header h1,
	.componentheading,
	div.newsfeed-category h2,
	div.contact-category h2,
	div.weblink-category h2,
	#k2FrontendEditToolbar h2,
	div.itemListCategory h2,
	div.itemHeader h2.itemTitle,
	div.tagItemHeader h2.tagItemTitle,
	div.userBlock h2,
	div.latestItemsCategory h2,
	div.latestItemHeader h2.latestItemTitle,
	div.itemIsFeatured h2, 
	div.catItemIsFeatured h3, 
	div.userItemIsFeatured h3,
	div.catItemHeader h3.catItemTitle,
	div.itemCommentsForm h3,
	div.userItemHeader h3.userItemTitle,
	h3.itemAuthorName {
		line-height: <?php echo htmlspecialchars($articleTitleLineHeight); ?>; 
	}
<?php } ?>
<?php // Module Title Color
if ($moduleTitleColor) { ?>
	.moduletable h3,
	.moduletable .custom h3 {
		color: #<?php echo htmlspecialchars($moduleTitleColor); ?>; 
	}
<?php } ?>
<?php // Module Title Font Size
if ($moduleTitleFontSize) { ?>
	.moduletable h3,
	.moduletable .custom h3 {
		font-size: <?php echo htmlspecialchars($moduleTitleFontSize); ?>; 
	}
<?php } ?>
<?php // Module Line Height
if ($moduleTitleLineHeight) { ?>
	.moduletable h3,
	.moduletable .custom h3 {
		line-height: <?php echo htmlspecialchars($moduleTitleLineHeight); ?>; 
	}
<?php } ?>
<?php // Nav Color 
if ($navColor) { ?>
	#fav-nav .navigation li a { 
		color: #<?php echo htmlspecialchars($navColor); ?> ; 
	}
<?php } ?>
<?php // Nav Background Color 
if ($navBgColor) { ?>
	#fav-nav .navigation .nav-pills > .active > a, 
	#fav-nav .navigation .nav-pills > li > a:hover,
	#fav-nav .navigation .nav-pills > li > a:focus { 
		background-color: #<?php echo htmlspecialchars($navBgColor); ?> ; 
	}
<?php } ?>
<?php // Nav Active Color
if ($navActiveColor) { ?>
	#fav-nav .navigation .nav-pills > .active > a, 
	#fav-nav .navigation .nav-pills > li > a:hover,
	#fav-nav .navigation .nav-pills > li > a:focus,
	#fav-nav .navigation .nav-pills .nav-child > li > a:hover,
	#fav-nav .navigation .nav-pills .nav-child > .active > a {
		color: #<?php echo htmlspecialchars($navActiveColor); ?> ;
	}
<?php } ?>
<?php // Paragraph Color
if ($paragraphColor) { ?>
	p { 
		color: #<?php echo htmlspecialchars($paragraphColor); ?>; 
	}
<?php } ?>
<?php // Paragraph Font Size
if ($paragraphFontSize) { ?>
	p { 
		font-size: <?php echo htmlspecialchars($paragraphFontSize); ?>; 
	}
<?php } ?>
<?php // Paragraph Line Height
if ($paragraphLineHeight) { ?>
	p { 
		line-height: <?php echo htmlspecialchars($paragraphLineHeight); ?>; 
	}
<?php } ?>
<?php // Button Primary Color
if ($buttonColor) { ?>
	.btn-primary,
	.btn.btn-primary,
	button.btn-primary, 
	input[type="submit"].btn-primary { 
		color: #<?php echo htmlspecialchars($buttonColor); ?>; 
	}
<?php } ?>
<?php // Button Primary Background Color
if ($buttonBgColor) { ?>
	.btn-primary,
	.btn.btn-primary,
	button.btn-primary, 
	input[type="submit"].btn-primary { 
		background-color: #<?php echo htmlspecialchars($buttonBgColor); ?>;
		background-image: none;
		text-shadow: none;
	}
<?php } ?>
<?php // Button Primary Border Color
if ($buttonBorderColor) { ?>
	.btn-primary,
	.btn.btn-primary,
	button.btn-primary, 
	input[type="submit"].btn-primary { 
		border: 1px solid #<?php echo htmlspecialchars($buttonBorderColor); ?>;
	}
<?php } ?>
<?php // Button Primary Hover Color
if ($buttonHoverColor) { ?>
	.btn-primary:hover,
	.btn.btn-primary:hover,
	button.btn-primary:hover,
	input[type="submit"].btn-primary:hover { 
		color: #<?php echo htmlspecialchars($buttonHoverColor); ?>; 
	}
<?php } ?>
<?php // Button Primary Background Hover Color
if ($buttonBgHoverColor) { ?>
	.btn-primary:hover,
	.btn.btn-primary:hover,
	button.btn-primary:hover,
	input[type="submit"].btn-primary:hover { 
		background-color: #<?php echo htmlspecialchars($buttonBgHoverColor); ?>; 
	}
<?php } ?>
<?php // Button Primary Border Hover Color
if ($buttonBorderHoverColor) { ?>
	.btn-primary:hover,
	.btn.btn-primary:hover,
	button.btn-primary:hover,
	input[type="submit"].btn-primary:hover { 
		border: 1px solid #<?php echo htmlspecialchars($buttonBorderHoverColor); ?>;
	}
<?php } ?>
<?php // Link Color
if ($linkColor) { ?>
	a,
	div.itemListCategory h2:before,
	div.itemIsFeatured h2:before, 
	div.catItemIsFeatured h3:before, 
	div.userItemIsFeatured h3:before,
	div.latestItemsCategory h2:before { 
		color: #<?php echo htmlspecialchars($linkColor); ?>; 
	}
<?php } ?>
<?php // Link Color Hover
if ($linkColorHover) { ?>
	a:hover, a:focus,
	div.itemListCategory h2:hover:before,
	div.itemIsFeatured h2:hover:before, 
	div.catItemIsFeatured h3:hover:before, 
	div.userItemIsFeatured h3:hover:before,
	div.latestItemsCategory h2:hover:before { 
		color: #<?php echo htmlspecialchars($linkColorHover); ?>; 
	}
<?php } ?>
<?php // List Link Color
if ($listColor) { ?>
	.moduletable .custom ul li, 
	.moduletable .custom ol li,
	div[class^="moduletable-"] div[class^="custom-"] ul li,
	div[class*=" moduletable-"] div[class^="custom-"] ul li,
	div[class^="moduletable-"] div[class*=" custom-"] ul li,
	div[class*=" moduletable-"] div[class*=" custom-"] ul li,
	div[class^="moduletable-"] div[class^="custom-"] ol li,
	div[class*=" moduletable-"] div[class^="custom-"] ol li,
	div[class^="moduletable-"] div[class*=" custom-"] ol li,
	div[class*=" moduletable-"] div[class*=" custom-"] 	ol li,
	div[class^="moduletable-"] ul li,
	div[class*=" moduletable-"] ul li,
	.blog ul li, 
	.blog ol li,
	.blog-featured ul li, 
	.blog-featured ol li, 
	.item ul li, 
	.item ol li, 
	.item-page ul li,
	.item-page ol li,
	#k2Container div.itemBody ul li,
	#k2Container div.itemBody ol li,
	#k2Container div.tagItemBody ul li,
	#k2Container div.tagItemBody ol li,
	#k2Container div.catItemBody ul li, 
	#k2Container div.catItemBody ol li, 
	#k2Container div.userItemBody ul li,
	#k2Container div.userItemBody ol li,
	#k2Container div.latestItemBody ul li,
	#k2Container div.latestItemBody ol li {
		color: #<?php echo htmlspecialchars($listColor); ?>; 
	}
<?php } ?>
<?php // Basic Menu Color
if ($basicMenuColor) { ?>
	.moduletable .menubasic a,
	.moduletable ul.nav.menubasic li.current ul.nav-child a,
	div[class^="moduletable-"] ul.nav.menubasic li.current ul.nav-child a,
	div[class*=" moduletable-"] ul.nav.menubasic li.current ul.nav-child a {
		color: #<?php echo htmlspecialchars($basicMenuColor); ?> ;
	}
<?php } ?>
<?php // Basic Menu Background Color
if ($basicMenuBgColor) { ?>
	.moduletable ul.nav.menubasic li.current,
	div[class^="moduletable-"] ul.nav.menubasic li.current,
	div[class*=" moduletable-"] ul.nav.menubasic li.current,
	.moduletable ul.nav.menubasic li.current.active.deeper.parent,
	div[class^="moduletable-"] ul.nav.menubasic li.current.active.deeper.parent,
	div[class*=" moduletable-"] ul.nav.menubasic li.current.active.deeper.parent,
	.moduletable .menubasic li.active ul.nav-child:hover li.current.active.deeper.parent,
	div[class^="moduletable-"] .menubasic li.active ul.nav-child:hover li.current.active.deeper.parent,
	div[class*=" moduletable-"] .menubasic li.active ul.nav-child:hover li.current.active.deeper.parent {
		background-color: #<?php echo htmlspecialchars($basicMenuBgColor); ?> ;
		color: #fff;
	}
<?php } ?>
<?php // Advert Background Color
if ($advertBgColor)	{ ?>
	#fav-advertwrap { 
		background-color: #<?php echo htmlspecialchars($advertBgColor); ?> ;
	}
<?php } ?>
<?php // Advert Background Image
if ($advertBgImage) { ?>
	#fav-advertwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($advertBgImage); ?>);
	}
<?php } ?>
<?php // Advert Background Image Repeat
if ($advertBgRepeat) { ?>
	#fav-advertwrap { 
		background-repeat: <?php echo htmlspecialchars($advertBgRepeat); ?>;
	}
<?php } ?>
<?php // Advert Color
if ($advertColor) { ?>
	#fav-advert p { 
		color: #<?php echo htmlspecialchars($advertColor); ?> ; 
	}
<?php } ?>
<?php // Advert Title Color
if ($advertTitleColor) { ?>
	#fav-advert .moduletable h3,
  	#fav-advert div[class^="moduletable-"] h3,
  	#fav-advert div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($advertTitleColor); ?> ; 
	}
<?php } ?>
<?php // Advert Link Color
if ($advertLinkColor) { ?>
	#fav-advert a { 
		color: #<?php echo htmlspecialchars($advertLinkColor); ?> ; 
	}
<?php } ?>
<?php // Advert Link Hover Color
if ($advertLinkHoverColor) { ?>
	#fav-advert a:hover { 
		color: #<?php echo htmlspecialchars($advertLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Slide Background Color
if ($slideBgColor)	{ ?>
	#fav-slidewrap { 
		background-color: #<?php echo htmlspecialchars($slideBgColor); ?> ;
	}
<?php } ?>
<?php // Slide Background Image
if ($slideBgImage) { ?>
	#fav-slidewrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($slideBgImage); ?>);
	}
<?php } ?>
<?php // Slide Background Image Repeat
if ($slideBgRepeat) { ?>
	#fav-slidewrap { 
		background-repeat: <?php echo htmlspecialchars($slideBgRepeat); ?>;
	}
<?php } ?>
<?php // Slide Color
if ($slideColor) { ?>
	#fav-slide p { 
		color: #<?php echo htmlspecialchars($slideColor); ?> ; 
	}
<?php } ?>
<?php // Slide Title Color
if ($slideTitleColor) { ?>
	#fav-slide .moduletable h3,
	#fav-slide div[class^="moduletable-"] h3,
  	#fav-slide div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($slideTitleColor); ?> ; 
	}
<?php } ?>
<?php // Slide Link Color
if ($slideLinkColor) { ?>
	#fav-slide a { 
		color: #<?php echo htmlspecialchars($slideLinkColor); ?> ; 
	}
<?php } ?>
<?php // Slide Link Hover Color
if ($slideLinkHoverColor) { ?>
	#fav-slide a:hover { 
		color: #<?php echo htmlspecialchars($slideLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Intro Background Color
if ($introBgColor)	{ ?>
	#fav-introwrap { 
		background-color: #<?php echo htmlspecialchars($introBgColor); ?> ;
	}
<?php } ?>
<?php // Intro Background Image
if ($introBgImage) { ?>
	#fav-introwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($introBgImage); ?>);
	}
<?php } ?>
<?php // Intro Background Image Repeat
if ($introBgRepeat) { ?>
	#fav-introwrap { 
		background-repeat: <?php echo htmlspecialchars($introBgRepeat); ?>;
	}
<?php } ?>
<?php // Intro Color
if ($introColor) { ?>
	#fav-intro p { 
		color: #<?php echo htmlspecialchars($introColor); ?> ; 
	}
<?php } ?>
<?php // Intro Title Color
if ($introTitleColor) { ?>
	#fav-intro .moduletable h3,
	#fav-intro div[class^="moduletable-"] h3,
  	#fav-intro div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($introTitleColor); ?> ; 
	}
<?php } ?>
<?php // Intro Link Color
if ($introLinkColor) { ?>
	#fav-intro a { 
		color: #<?php echo htmlspecialchars($introLinkColor); ?> ; 
	}
<?php } ?>
<?php // Intro Link Hover Color
if ($introLinkHoverColor) { ?>
	#fav-intro a:hover { 
		color: #<?php echo htmlspecialchars($introLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Showcase Background Color
if ($showcaseBgColor)	{ ?>
	#fav-showcasewrap { 
		background-color: #<?php echo htmlspecialchars($showcaseBgColor); ?> ;
	}
<?php } ?>
<?php // Showcase Background Image
if ($showcaseBgImage) { ?>
	#fav-showcasewrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($showcaseBgImage); ?>);
	}
<?php } ?>
<?php // Showcase Background Image Repeat
if ($showcaseBgRepeat) { ?>
	#fav-showcasewrap { 
		background-repeat: <?php echo htmlspecialchars($showcaseBgRepeat); ?>;
	}
<?php } ?>
<?php // Showcase Color
if ($showcaseColor) { ?>
	#fav-showcase p { 
		color: #<?php echo htmlspecialchars($showcaseColor); ?> ; 
	}
<?php } ?>
<?php // Showcase Title Color
if ($showcaseTitleColor) { ?>
	#fav-showcase .moduletable h3,
	#fav-showcase div[class^="moduletable-"] h3,
  	#fav-showcase div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($showcaseTitleColor); ?> ; 
	}
<?php } ?>
<?php // Showcase Link Color
if ($showcaseLinkColor) { ?>
	#fav-showcase a { 
		color: #<?php echo htmlspecialchars($showcaseLinkColor); ?> ; 
	}
<?php } ?>
<?php // Showcase Link Hover Color
if ($showcaseLinkHoverColor) { ?>
	#fav-showcase a:hover { 
		color: #<?php echo htmlspecialchars($showcaseLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Promo Background Color
if ($promoBgColor)	{ ?>
	#fav-promowrap { 
		background-color: #<?php echo htmlspecialchars($promoBgColor); ?> ;
	}
<?php } ?>
<?php // Promo Background Image
if ($promoBgImage) { ?>
	#fav-promowrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($promoBgImage); ?>);
	}
<?php } ?>
<?php // Promo Background Image Repeat
if ($promoBgRepeat) { ?>
	#fav-promowrap { 
		background-repeat: <?php echo htmlspecialchars($promoBgRepeat); ?>;
	}
<?php } ?>
<?php // Promo Color
if ($promoColor) { ?>
	#fav-promo p { 
		color: #<?php echo htmlspecialchars($promoColor); ?> ; 
	}
<?php } ?>
<?php // Promo Title Color
if ($promoTitleColor) { ?>
	#fav-promo .moduletable h3,
	#fav-promo div[class^="moduletable-"] h3,
  	#fav-promo div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($promoTitleColor); ?> ; 
	}
<?php } ?>
<?php // Promo Link Color
if ($promoLinkColor) { ?>
	#fav-promo a { 
		color: #<?php echo htmlspecialchars($promoLinkColor); ?> ; 
	}
<?php } ?>
<?php // Promo Link Hover Color
if ($promoLinkHoverColor) { ?>
	#fav-promo a:hover { 
		color: #<?php echo htmlspecialchars($promoLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Top Background Color
if ($topBgColor)	{ ?>
	#fav-topwrap { 
		background-color: #<?php echo htmlspecialchars($topBgColor); ?> ;
	}
<?php } ?>
<?php // Top Background Image
if ($topBgImage) { ?>
	#fav-topwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($topBgImage); ?>);
	}
<?php } ?>
<?php // Top Background Image Repeat
if ($topBgRepeat) { ?>
	#fav-topwrap { 
		background-repeat: <?php echo htmlspecialchars($topBgRepeat); ?>;
	}
<?php } ?>
<?php // Top Color
if ($topColor) { ?>
	#fav-top p { 
		color: #<?php echo htmlspecialchars($topColor); ?> ; 
	}
<?php } ?>
<?php // Top Title Color
if ($topTitleColor) { ?>
	#fav-top .moduletable h3,
	#fav-top div[class^="moduletable-"] h3,
  	#fav-top div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($topTitleColor); ?> ; 
	}
<?php } ?>
<?php // Top Link Color
if ($topLinkColor) { ?>
	#fav-top a { 
		color: #<?php echo htmlspecialchars($topLinkColor); ?> ; 
	}
<?php } ?>
<?php // Top Link Hover Color
if ($topLinkHoverColor) { ?>
	#fav-top a:hover { 
		color: #<?php echo htmlspecialchars($topLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Maintop Background Color
if ($maintopBgColor)	{ ?>
	#fav-maintopwrap { 
		background-color: #<?php echo htmlspecialchars($maintopBgColor); ?> ;
	}
<?php } ?>
<?php // Maintop Background Image
if ($maintopBgImage) { ?>
	#fav-maintopwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($maintopBgImage); ?>);
	}
<?php } ?>
<?php // Maintop Background Image Repeat
if ($maintopBgRepeat) { ?>
	#fav-maintopwrap { 
		background-repeat: <?php echo htmlspecialchars($maintopBgRepeat); ?>;
	}
<?php } ?>
<?php // Maintop Color
if ($maintopColor) { ?>
	#fav-maintop p { 
		color: #<?php echo htmlspecialchars($maintopColor); ?> ; 
	}
<?php } ?>
<?php // Maintop Title Color
if ($maintopTitleColor) { ?>
	#fav-maintop .moduletable h3,
	#fav-maintop div[class^="moduletable-"] h3,
  	#fav-maintop div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($maintopTitleColor); ?> ; 
	}
<?php } ?>
<?php // Maintop Link Color
if ($maintopLinkColor) { ?>
	#fav-maintop a { 
		color: #<?php echo htmlspecialchars($maintopLinkColor); ?> ; 
	}
<?php } ?>
<?php // Maintop Link Hover Color
if ($maintopLinkHoverColor) { ?>
	#fav-maintop a:hover { 
		color: #<?php echo htmlspecialchars($maintopLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Mainbottom Background Color
if ($mainbottomBgColor)	{ ?>
	#fav-mainbottomwrap { 
		background-color: #<?php echo htmlspecialchars($mainbottomBgColor); ?> ;
	}
<?php } ?>
<?php // Mainbottom Background Image
if ($mainbottomBgImage) { ?>
	#fav-mainbottomwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($mainbottomBgImage); ?>);
	}
<?php } ?>
<?php // Mainbottom Background Image Repeat
if ($mainbottomBgRepeat) { ?>
	#fav-mainbottomwrap { 
		background-repeat: <?php echo htmlspecialchars($mainbottomBgRepeat); ?>;
	}
<?php } ?>
<?php // Mainbottom Color
if ($mainbottomColor) { ?>
	#fav-mainbottom p { 
		color: #<?php echo htmlspecialchars($mainbottomColor); ?> ; 
	}
<?php } ?>
<?php // Mainbottom Title Color
if ($mainbottomTitleColor) { ?>
	#fav-mainbottom .moduletable h3,
	#fav-mainbottom div[class^="moduletable-"] h3,
  	#fav-mainbottom div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($mainbottomTitleColor); ?> ; 
	}
<?php } ?>
<?php // Mainbottom Link Color
if ($mainbottomLinkColor) { ?>
	#fav-mainbottom a { 
		color: #<?php echo htmlspecialchars($mainbottomLinkColor); ?> ; 
	}
<?php } ?>
<?php // Mainbottom Link Hover Color
if ($mainbottomLinkHoverColor) { ?>
	#fav-mainbottom a:hover { 
		color: #<?php echo htmlspecialchars($mainbottomLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Bottom Background Color
if ($bottomBgColor)	{ ?>
	#fav-bottomwrap { 
		background-color: #<?php echo htmlspecialchars($bottomBgColor); ?> ;
	}
<?php } ?>
<?php // Bottom Background Image
if ($bottomBgImage) { ?>
	#fav-bottomwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($bottomBgImage); ?>);
	}
<?php } ?>
<?php // Bottom Background Image Repeat
if ($bottomBgRepeat) { ?>
	#fav-bottomwrap { 
		background-repeat: <?php echo htmlspecialchars($bottomBgRepeat); ?>;
	}
<?php } ?>
<?php // Bottom Color
if ($bottomColor) { ?>
	#fav-bottom p { 
		color: #<?php echo htmlspecialchars($bottomColor); ?> ; 
	}
<?php } ?>
<?php // Bottom Title Color
if ($bottomTitleColor) { ?>
	#fav-bottom .moduletable h3,
	#fav-bottom div[class^="moduletable-"] h3,
  	#fav-bottom div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($bottomTitleColor); ?> ; 
	}
<?php } ?>
<?php // Bottom Link Color
if ($bottomLinkColor) { ?>
	#fav-bottom a { 
		color: #<?php echo htmlspecialchars($bottomLinkColor); ?> ; 
	}
<?php } ?>
<?php // Bottom Link Hover Color
if ($bottomLinkHoverColor) { ?>
	#fav-bottom a:hover { 
		color: #<?php echo htmlspecialchars($bottomLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // User Background Color
if ($userBgColor)	{ ?>
	#fav-userwrap { 
		background-color: #<?php echo htmlspecialchars($userBgColor); ?> ;
	}
<?php } ?>
<?php // User Background Image
if ($userBgImage) { ?>
	#fav-userwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($userBgImage); ?>);
	}
<?php } ?>
<?php // User Background Image Repeat
if ($userBgRepeat) { ?>
	#fav-userwrap { 
		background-repeat: <?php echo htmlspecialchars($userBgRepeat); ?>;
	}
<?php } ?>
<?php // User Color
if ($userColor) { ?>
	#fav-user p { 
		color: #<?php echo htmlspecialchars($userColor); ?> ; 
	}
<?php } ?>
<?php // User Title Color
if ($userTitleColor) { ?>
	#fav-user .moduletable h3,
	#fav-user div[class^="moduletable-"] h3,
  	#fav-user div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($userTitleColor); ?> ; 
	}
<?php } ?>
<?php // User Link Color
if ($userLinkColor) { ?>
	#fav-user a { 
		color: #<?php echo htmlspecialchars($userLinkColor); ?> ; 
	}
<?php } ?>
<?php // User Link Hover Color
if ($userLinkHoverColor) { ?>
	#fav-user a:hover { 
		color: #<?php echo htmlspecialchars($userLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Footer Background Color
if ($footerBgColor)	{ ?>
	#fav-footerwrap { 
		background-color: #<?php echo htmlspecialchars($footerBgColor); ?> ;
	}
<?php } ?>
<?php // Footer Background Image
if ($footerBgImage) { ?>
	#fav-footerwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($footerBgImage); ?>);
	}
<?php } ?>
<?php // Footer Background Image Repeat
if ($footerBgRepeat) { ?>
	#fav-footerwrap { 
		background-repeat: <?php echo htmlspecialchars($footerBgRepeat); ?>;
	}
<?php } ?>
<?php // Footer Color
if ($footerColor) { ?>
	#fav-footer p { 
		color: #<?php echo htmlspecialchars($footerColor); ?> ; 
	}
<?php } ?>
<?php // Footer Title Color
if ($footerTitleColor) { ?>
	#fav-footer .moduletable h3,
	#fav-footer div[class^="moduletable-"] h3,
  	#fav-footer div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($footerTitleColor); ?> ; 
	}
<?php } ?>
<?php // Footer Link Color
if ($footerLinkColor) { ?>
	#fav-footer a { 
		color: #<?php echo htmlspecialchars($footerLinkColor); ?> ; 
	}
<?php } ?>
<?php // Footer Link Hover Color
if ($footerLinkHoverColor) { ?>
	#fav-footer a:hover { 
		color: #<?php echo htmlspecialchars($footerLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Copyright Background Color
if ($copyrightBgColor)	{ ?>
	#fav-copyrightwrap { 
		background-color: #<?php echo htmlspecialchars($copyrightBgColor); ?> ;
	}
<?php } ?>
<?php // Copyright Background Image
if ($copyrightBgImage) { ?>
	#fav-copyrightwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($copyrightBgImage); ?>);
	}
<?php } ?>
<?php // Copyright Background Image Repeat
if ($copyrightBgRepeat) { ?>
	#fav-copyrightwrap { 
		background-repeat: <?php echo htmlspecialchars($copyrightBgRepeat); ?>;
	}
<?php } ?>
<?php // Copyright Color
if ($copyrightColor) { ?>
	#fav-copyright p { 
		color: #<?php echo htmlspecialchars($copyrightColor); ?> ; 
	}
<?php } ?>
<?php // Copyright Title Color
if ($copyrightTitleColor) { ?>
	#fav-copyright .moduletable h3,
	#fav-copyright div[class^="moduletable-"] h3,
  	#fav-copyright div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($copyrightTitleColor); ?> ; 
	}
<?php } ?>
<?php // Copyright Link Color
if ($copyrightLinkColor) { ?>
	#fav-copyright a { 
		color: #<?php echo htmlspecialchars($copyrightLinkColor); ?> ; 
	}
<?php } ?>
<?php // Copyright Link Hover Color
if ($copyrightLinkHoverColor) { ?>
	#fav-copyright a:hover { 
		color: #<?php echo htmlspecialchars($copyrightLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Copyright Font Size
if ($copyrightFontSize) { ?>
	#fav-showcopyright p {
		font-size: <?php echo htmlspecialchars($copyrightFontSize); ?>;
	}
<?php } ?>
<?php // Copyright Line Height
if ($copyrightLineHeight) { ?>
	#fav-showcopyright p {
		line-height: <?php echo htmlspecialchars($copyrightLineHeight); ?>;
	}
<?php } ?>
<?php // Copyright Padding
if ($copyrightPadding) { ?>
	#fav-showcopyright p {
		padding: <?php echo htmlspecialchars($copyrightPadding); ?>;
	}
<?php } ?>
<?php // Copyright Margin
if ($copyrightMargin) { ?>
	#fav-showcopyright p {
		margin: <?php echo htmlspecialchars($copyrightMargin); ?>;
	}
<?php } ?>
<?php // Debug Background Color
if ($debugBgColor)	{ ?>
	#fav-debugwrap { 
		background-color: #<?php echo htmlspecialchars($debugBgColor); ?> ;
	}
<?php } ?>
<?php // Debug Background Image
if ($debugBgImage) { ?>
	#fav-debugwrap { 
		background-image: url(<?php echo $this->baseurl."/"; echo htmlspecialchars($debugBgImage); ?>);
	}
<?php } ?>
<?php // Debug Background Image Repeat
if ($debugBgRepeat) { ?>
	#fav-debugwrap { 
		background-repeat: <?php echo htmlspecialchars($debugBgRepeat); ?>;
	}
<?php } ?>
<?php // Debug Color
if ($debugColor) { ?>
	#fav-debug p { 
		color: #<?php echo htmlspecialchars($debugColor); ?> ; 
	}
<?php } ?>
<?php // Debug Title Color
if ($debugTitleColor) { ?>
	#fav-debug .moduletable h3,
	#fav-debug div[class^="moduletable-"] h3,
  	#fav-debug div[class*=" moduletable-"] h3 { 
		color: #<?php echo htmlspecialchars($debugTitleColor); ?> ; 
	}
<?php } ?>
<?php // Debug Link Color
if ($debugLinkColor) { ?>
	#fav-debug a { 
		color: #<?php echo htmlspecialchars($debugLinkColor); ?> ; 
	}
<?php } ?>
<?php // Debug Link Hover Color
if ($debugLinkHoverColor) { ?>
	#fav-debug a:hover { 
		color: #<?php echo htmlspecialchars($debugLinkHoverColor); ?> ; 
	}
<?php } ?>
<?php // Logo Padding
if ($defaultLogoPadding) { ?>
	.defaultLogo {
		padding: <?php echo htmlspecialchars($defaultLogoPadding); ?>; 
	}
<?php } ?>
<?php // Logo Margin
if ($defaultLogoMargin) { ?>
	.defaultLogo {
		margin: <?php echo htmlspecialchars($defaultLogoMargin); ?>; 
	}
<?php } ?>
<?php // Uploaded Logo Padding
if ($mediaLogoPadding) { ?>
	.mediaLogo {
		padding: <?php echo htmlspecialchars($mediaLogoPadding); ?>;
	}
<?php } ?>
<?php // Uploaded Logo Margin
if ($mediaLogoMargin) { ?>
	.mediaLogo { 
		margin: <?php echo htmlspecialchars($mediaLogoMargin); ?>;
	}
<?php } ?>
<?php // Text Logo Color
if ($textLogoColor) { ?>
	.textLogo {
		color: #<?php echo htmlspecialchars($textLogoColor); ?> ;
	}
<?php } ?>
<?php // Text Logo Font Size
if ($textLogoFontSize) { ?>
	.textLogo {
		font-size: <?php echo htmlspecialchars($textLogoFontSize); ?> ;
	}
<?php } ?>
<?php // Text Logo Google Font
if ($textLogoGoogleFont) { ?>
	.textLogo {
		font-family: '<?php echo str_replace('+', ' ', $this->params->get('textLogoGoogleFont'));?>', sans-serif;
		font-weight: 400;
	}
<?php } ?>
<?php // Text Logo Line Height
if ($textLogoLineHeight) { ?>
	.textLogo {
		line-height: <?php echo htmlspecialchars($textLogoLineHeight); ?> ;
	}
<?php } ?>
<?php // Text Logo Padding
if ($textLogoPadding) { ?>
	.textLogo {
		padding: <?php echo htmlspecialchars($textLogoPadding); ?>;
	}
<?php } ?>
<?php // Text Logo Margin
if ($textLogoMargin) { ?>
	.textLogo {
		margin: <?php echo htmlspecialchars($textLogoMargin); ?>;
	}
<?php } ?>
<?php // Slogan Logo Color
if ($sloganColor) { ?>
	.slogan {
		color: #<?php echo htmlspecialchars($sloganColor); ?> ;
	}
<?php } ?>
<?php // Slogan Logo Font Size
if ($sloganFontSize) { ?>
	.slogan {
		font-size: <?php echo htmlspecialchars($sloganFontSize); ?> ;
	}
<?php } ?>
<?php // Slogan Logo Font Family
if ($sloganFontFamily) { ?>
	.slogan {
		font-family: <?php echo htmlspecialchars($sloganFontFamily); ?> ;
	}
<?php } ?>
<?php // Slogan Logo Line Height
if ($sloganLineHeight) { ?>
	.slogan {
		line-height: <?php echo htmlspecialchars($sloganLineHeight); ?> ;
	}
<?php } ?>
<?php // Slogan Logo Padding
if ($sloganPadding) { ?>
	.slogan {
		padding: <?php echo htmlspecialchars($sloganPadding); ?>; 
	}
<?php } ?>
<?php // Slogan Logo Margin
if ($sloganMargin) { ?>
	.slogan {
		margin: <?php echo htmlspecialchars($sloganMargin); ?>; 
	}
<?php } ?>
<?php // Sfx1 Title Color
if ($sfx1TitleColor) { ?>
	.moduletable-sfx1 h3 { 
		color: #<?php echo htmlspecialchars($sfx1TitleColor); ?> ; 
	}
<?php } ?>
<?php // Sfx1 Border Color
if ($sfx1TitleBorderColor) { ?>
	.moduletable-sfx1 h3 { 
		border-bottom: 1px solid #<?php echo htmlspecialchars($sfx1TitleBorderColor); ?> ; 
	}
<?php } ?>
<?php // Sfx1 Title Icon Color
if ($sfx1TitleIconColor) { ?>
	.moduletable-sfx1 h3 i { 
		color: #<?php echo htmlspecialchars($sfx1TitleIconColor); ?> ; 
	}
<?php } ?>
<?php // Sfx1 Title Icon Background Color
if ($sfx1TitleIconBgColor) { ?>
	.moduletable-sfx1 h3 i { 
		background-color: #<?php echo htmlspecialchars($sfx1TitleIconBgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx1 Title Icon Line Height
if ($sfx1TitleIconLineHeight) { ?>
	.moduletable-sfx1 h3 i { 
		line-height: <?php echo htmlspecialchars($sfx1TitleIconLineHeight); ?> ; 
	}
<?php } ?>
<?php // Sfx1 Title Icon Font Size
if ($sfx1TitleIconFontSize) { ?>
	.moduletable-sfx1 h3 i { 
		font-size: <?php echo htmlspecialchars($sfx1TitleIconFontSize); ?> ; 
	}
<?php } ?>
<?php // Sfx1 Title Icon Padding
if ($sfx1TitleIconPadding) { ?>
	.moduletable-sfx1 h3 i { 
		padding: <?php echo htmlspecialchars($sfx1TitleIconPadding); ?> ; 
	}
<?php } ?>
<?php // Sfx2 Title Color
if ($sfx2TitleColor) { ?>
	.moduletable-sfx2 h3 { 
		color: #<?php echo htmlspecialchars($sfx2TitleColor); ?> ; 
	}
<?php } ?>
<?php // Sfx2 Border Color
if ($sfx1TitleBorderColor) { ?>
	.moduletable-sfx2 h3 { 
		border-bottom: 1px solid #<?php echo htmlspecialchars($sfx2TitleBorderColor); ?> ; 
	}
<?php } ?>
<?php // Sfx2 Title Icon Color
if ($sfx2TitleIconColor) { ?>
	.moduletable-sfx2 h3 i { 
		color: #<?php echo htmlspecialchars($sfx2TitleIconColor); ?> ; 
	}
<?php } ?>
<?php // Sfx2 Title Icon Background Color
if ($sfx2TitleIconBgColor) { ?>
	.moduletable-sfx2 h3 i { 
		background-color: #<?php echo htmlspecialchars($sfx2TitleIconBgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx2 Title Icon Line Height
if ($sfx2TitleIconLineHeight) { ?>
	.moduletable-sfx2 h3 i { 
		line-height: <?php echo htmlspecialchars($sfx2TitleIconLineHeight); ?> ; 
	}
<?php } ?>
<?php // Sfx2 Title Icon Font Size
if ($sfx2TitleIconFontSize) { ?>
	.moduletable-sfx2 h3 i { 
		font-size: <?php echo htmlspecialchars($sfx2TitleIconFontSize); ?> ; 
	}
<?php } ?>
<?php // Sfx2 Title Icon Padding
if ($sfx2TitleIconPadding) { ?>
	.moduletable-sfx2 h3 i { 
		padding: <?php echo htmlspecialchars($sfx2TitleIconPadding); ?> ; 
	}
<?php } ?>
	<?php // Sfx3 Title Color
if ($sfx3TitleColor) { ?>
	.moduletable-sfx3 h3 { 
		color: #<?php echo htmlspecialchars($sfx3TitleColor); ?> ; 
	}
<?php } ?>
<?php // Sfx3 Border Color
if ($sfx3TitleBorderColor) { ?>
	.moduletable-sfx3 h3 { 
		border-bottom: 1px solid #<?php echo htmlspecialchars($sfx3TitleBorderColor); ?> ; 
	}
<?php } ?>
<?php // Sfx3 Title Icon Color
if ($sfx3TitleIconColor) { ?>
	.moduletable-sfx3 h3 i { 
		color: #<?php echo htmlspecialchars($sfx3TitleIconColor); ?> ; 
	}
<?php } ?>
<?php // Sfx3 Title Icon Background Color
if ($sfx3TitleIconBgColor) { ?>
	.moduletable-sfx3 h3 i { 
		background-color: #<?php echo htmlspecialchars($sfx3TitleIconBgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx3 Title Icon Line Height
if ($sfx3TitleIconLineHeight) { ?>
	.moduletable-sfx3 h3 i { 
		line-height: <?php echo htmlspecialchars($sfx3TitleIconLineHeight); ?> ; 
	}
<?php } ?>
<?php // Sfx3 Title Icon Font Size
if ($sfx3TitleIconFontSize) { ?>
	.moduletable-sfx3 h3 i { 
		font-size: <?php echo htmlspecialchars($sfx3TitleIconFontSize); ?> ; 
	}
<?php } ?>
<?php // Sfx3 Title Icon Padding
if ($sfx3TitleIconPadding) { ?>
	.moduletable-sfx3 h3 i { 
		padding: <?php echo htmlspecialchars($sfx3TitleIconPadding); ?> ; 
	}
<?php } ?>
	<?php // Sfx4 Title Color
if ($sfx4TitleColor) { ?>
	.moduletable-sfx4 h3 { 
		color: #<?php echo htmlspecialchars($sfx4TitleColor); ?> ; 
	}
<?php } ?>
<?php // Sfx4 Border Color
if ($sfx4TitleBorderColor) { ?>
	.moduletable-sfx4 h3 { 
		border-bottom: 1px solid #<?php echo htmlspecialchars($sfx4TitleBorderColor); ?> ; 
	}
<?php } ?>
<?php // Sfx4 Title Icon Color
if ($sfx4TitleIconColor) { ?>
	.moduletable-sfx4 h3 i { 
		color: #<?php echo htmlspecialchars($sfx4TitleIconColor); ?> ; 
	}
<?php } ?>
<?php // Sfx4 Title Icon Background Color
if ($sfx4TitleIconBgColor) { ?>
	.moduletable-sfx4 h3 i { 
		background-color: #<?php echo htmlspecialchars($sfx4TitleIconBgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx4 Title Icon Line Height
if ($sfx4TitleIconLineHeight) { ?>
	.moduletable-sfx4 h3 i { 
		line-height: <?php echo htmlspecialchars($sfx4TitleIconLineHeight); ?> ; 
	}
<?php } ?>
<?php // Sfx4 Title Icon Font Size
if ($sfx4TitleIconFontSize) { ?>
	.moduletable-sfx4 h3 i { 
		font-size: <?php echo htmlspecialchars($sfx4TitleIconFontSize); ?> ; 
	}
<?php } ?>
<?php // Sfx4 Title Icon Padding
if ($sfx4TitleIconPadding) { ?>
	.moduletable-sfx4 h3 i { 
		padding: <?php echo htmlspecialchars($sfx4TitleIconPadding); ?> ; 
	}
<?php } ?>
	<?php // Sfx5 Title Color
if ($sfx5TitleColor) { ?>
	.moduletable-sfx5 h3 { 
		color: #<?php echo htmlspecialchars($sfx5TitleColor); ?> ; 
	}
<?php } ?>
<?php // Sfx5 Border Color
if ($sfx1TitleBorderColor) { ?>
	.moduletable-sfx5 h3 { 
		border-bottom: 1px solid #<?php echo htmlspecialchars($sfx5TitleBorderColor); ?> ; 
	}
<?php } ?>
<?php // Sfx5 Title Icon Color
if ($sfx5TitleIconColor) { ?>
	.moduletable-sfx5 h3 i { 
		color: #<?php echo htmlspecialchars($sfx5TitleIconColor); ?> ; 
	}
<?php } ?>
<?php // Sfx5 Title Icon Background Color
if ($sfx5TitleIconBgColor) { ?>
	.moduletable-sfx5 h3 i { 
		background-color: #<?php echo htmlspecialchars($sfx5TitleIconBgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx5 Title Icon Line Height
if ($sfx5TitleIconLineHeight) { ?>
	.moduletable-sfx5 h3 i { 
		line-height: <?php echo htmlspecialchars($sfx5TitleIconLineHeight); ?> ; 
	}
<?php } ?>
<?php // Sfx5 Title Icon Font Size
if ($sfx5TitleIconFontSize) { ?>
	.moduletable-sfx5 h3 i { 
		font-size: <?php echo htmlspecialchars($sfx5TitleIconFontSize); ?> ; 
	}
<?php } ?>
<?php // Sfx5 Title Icon Padding
if ($sfx5TitleIconPadding) { ?>
	.moduletable-sfx5 h3 i { 
		padding: <?php echo htmlspecialchars($sfx5TitleIconPadding); ?> ; 
	}
<?php } ?>
<?php // Sfx6 Title Color
if ($sfx6TitleColor) { ?>
	.moduletable-sfx6 h3 { 
		color: #<?php echo htmlspecialchars($sfx6TitleColor); ?> ; 
	}
<?php } ?>
<?php // Sfx6 Border Color
if ($sfx6TitleBorderColor) { ?>
	.moduletable-sfx6 h3 { 
		border-bottom: 1px solid #<?php echo htmlspecialchars($sfx6TitleBorderColor); ?> ; 
	}
<?php } ?>
<?php // Sfx6 Title Icon Color
if ($sfx6TitleIconColor) { ?>
	.moduletable-sfx6 h3 i { 
		color: #<?php echo htmlspecialchars($sfx6TitleIconColor); ?> ; 
	}
<?php } ?>
<?php // Sfx6 Title Icon Background Color
if ($sfx6TitleIconBgColor) { ?>
	.moduletable-sfx6 h3 i { 
		background-color: #<?php echo htmlspecialchars($sfx6TitleIconBgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx6 Title Icon Line Height
if ($sfx6TitleIconLineHeight) { ?>
	.moduletable-sfx6 h3 i { 
		line-height: <?php echo htmlspecialchars($sfx6TitleIconLineHeight); ?> ; 
	}
<?php } ?>
<?php // Sfx6 Title Icon Font Size
if ($sfx6TitleIconFontSize) { ?>
	.moduletable-sfx6 h3 i { 
		font-size: <?php echo htmlspecialchars($sfx6TitleIconFontSize); ?> ; 
	}
<?php } ?>
<?php // Sfx6 Title Icon Padding
if ($sfx6TitleIconPadding) { ?>
	.moduletable-sfx6 h3 i { 
		padding: <?php echo htmlspecialchars($sfx6TitleIconPadding); ?> ; 
	}
<?php } ?>
<?php // Sfx7 Color
if ($sfx7Color) { ?>
	.moduletable-sfx7 { 
		color: #<?php echo htmlspecialchars($sfx7Color); ?> ; 
	}
<?php } ?>
<?php // Sfx7 Background Color
if ($sfx7BgColor) { ?>
	.moduletable-sfx7 { 
		background-color: #<?php echo htmlspecialchars($sfx7BgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx7 Title Color
if ($sfx7TitleColor) { ?>
	.moduletable-sfx7 h3 { 
		color: #<?php echo htmlspecialchars($sfx7TitleColor); ?> ; 
	}
<?php } ?>
<?php // Sfx7 Title Icon Color
if ($sfx7TitleIconColor) { ?>
	.moduletable-sfx7 h3 i { 
		color: #<?php echo htmlspecialchars($sfx7TitleIconColor); ?> ; 
	}
<?php } ?>
<?php // Sfx7 Title Icon Background Color
if ($sfx7TitleIconBgColor) { ?>
	.moduletable-sfx7 h3 i { 
		background-color: #<?php echo htmlspecialchars($sfx7TitleIconBgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx7 Title Icon Line Height
if ($sfx7TitleIconLineHeight) { ?>
	.moduletable-sfx7 h3 i { 
		line-height: <?php echo htmlspecialchars($sfx7TitleIconLineHeight); ?> ; 
	}
<?php } ?>
<?php // Sfx7 Title Icon Font Size
if ($sfx7TitleIconFontSize) { ?>
	.moduletable-sfx7 h3 i { 
		font-size: <?php echo htmlspecialchars($sfx7TitleIconFontSize); ?> ; 
	}
<?php } ?>
<?php // Sfx7 Title Icon Padding
if ($sfx7TitleIconPadding) { ?>
	.moduletable-sfx7 h3 i { 
		padding: <?php echo htmlspecialchars($sfx7TitleIconPadding); ?> ; 
	}
<?php } ?>
	<?php // Sfx8 Color
if ($sfx8Color) { ?>
	.moduletable-sfx8 { 
		color: #<?php echo htmlspecialchars($sfx8Color); ?> ; 
	}
<?php } ?>
<?php // Sfx8 Background Color
if ($sfx8BgColor) { ?>
	.moduletable-sfx8 { 
		background-color: #<?php echo htmlspecialchars($sfx8BgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx8 Title Color
if ($sfx8TitleColor) { ?>
	.moduletable-sfx8 h3 { 
		color: #<?php echo htmlspecialchars($sfx8TitleColor); ?> ; 
	}
<?php } ?>
<?php // Sfx8 Title Icon Color
if ($sfx8TitleIconColor) { ?>
	.moduletable-sfx8 h3 i { 
		color: #<?php echo htmlspecialchars($sfx8TitleIconColor); ?> ; 
	}
<?php } ?>
<?php // Sfx8 Title Icon Background Color
if ($sfx8TitleIconBgColor) { ?>
	.moduletable-sfx8 h3 i { 
		background-color: #<?php echo htmlspecialchars($sfx8TitleIconBgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx8 Title Icon Line Height
if ($sfx8TitleIconLineHeight) { ?>
	.moduletable-sfx8 h3 i { 
		line-height: <?php echo htmlspecialchars($sfx8TitleIconLineHeight); ?> ; 
	}
<?php } ?>
<?php // Sfx8 Title Icon Font Size
if ($sfx8TitleIconFontSize) { ?>
	.moduletable-sfx8 h3 i { 
		font-size: <?php echo htmlspecialchars($sfx8TitleIconFontSize); ?> ; 
	}
<?php } ?>
<?php // Sfx8 Title Icon Padding
if ($sfx8TitleIconPadding) { ?>
	.moduletable-sfx8 h3 i { 
		padding: <?php echo htmlspecialchars($sfx8TitleIconPadding); ?> ; 
	}
<?php } ?>
	<?php // Sfx9 Color
if ($sfx9Color) { ?>
	.moduletable-sfx9 { 
		color: #<?php echo htmlspecialchars($sfx9Color); ?> ; 
	}
<?php } ?>
<?php // Sfx9 Background Color
if ($sfx9BgColor) { ?>
	.moduletable-sfx9 { 
		background-color: #<?php echo htmlspecialchars($sfx9BgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx9 Title Color
if ($sfx9TitleColor) { ?>
	.moduletable-sfx9 h3 { 
		color: #<?php echo htmlspecialchars($sfx9TitleColor); ?> ; 
	}
<?php } ?>
<?php // Sfx9 Title Icon Color
if ($sfx9TitleIconColor) { ?>
	.moduletable-sfx9 h3 i { 
		color: #<?php echo htmlspecialchars($sfx9TitleIconColor); ?> ; 
	}
<?php } ?>
<?php // Sfx9 Title Icon Background Color
if ($sfx9TitleIconBgColor) { ?>
	.moduletable-sfx9 h3 i { 
		background-color: #<?php echo htmlspecialchars($sfx9TitleIconBgColor); ?> ; 
	}
<?php } ?>
<?php // Sfx9 Title Icon Line Height
if ($sfx9TitleIconLineHeight) { ?>
	.moduletable-sfx9 h3 i { 
		line-height: <?php echo htmlspecialchars($sfx9TitleIconLineHeight); ?> ; 
	}
<?php } ?>
<?php // Sfx9 Title Icon Font Size
if ($sfx9TitleIconFontSize) { ?>
	.moduletable-sfx9 h3 i { 
		font-size: <?php echo htmlspecialchars($sfx9TitleIconFontSize); ?> ; 
	}
<?php } ?>
<?php // Sfx9 Title Icon Padding
if ($sfx9TitleIconPadding) { ?>
	.moduletable-sfx9 h3 i { 
		padding: <?php echo htmlspecialchars($sfx9TitleIconPadding); ?> ; 
	}
<?php } ?>
<?php if (($showRetinaLogo) !=0) { // Mobile Retina Logo ?>
	@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) { 
	  	.showRetinaLogo { display: block; }
	  	.defaultLogo, .mediaLogo, .textLogo { display: none;}
	}
<?php } ?>
<?php // Mobile Show Images
if ($mobileShowImages) { ?>
	@media (max-width: 480px) {
		#fav-main img, 
		.moduletable .custom img,
		div[class^="moduletable-"] div[class^="custom-"] img,
		div[class*=" moduletable-"] div[class*=" custom-"] img,
		.img-left, 
		.img-right { 
			display: <?php echo htmlspecialchars($mobileShowImages); ?> ; 
		}
	}
<?php } ?>
<?php // Paragraph Mobile Font Size
if ($paragraphMobileFontSize) { ?>
	@media (max-width: 480px) {
		p { 
			font-size: <?php echo htmlspecialchars($paragraphMobileFontSize); ?> ; 
		}
	}
<?php } ?>
<?php // Article Mobile Font Size
if ($articleMobileTitleFontSize) { ?>
	@media (max-width: 480px) {
		.page-header h2, 
		h2.item-title,
		.blog-featured h2.item-title,
		.page-header h1,
		.componentheading,
		div.newsfeed-category h2,
		div.contact-category h2,
		div.weblink-category h2,
		#k2FrontendEditToolbar h2,
		div.itemListCategory h2,
		div.itemHeader h2.itemTitle,
		div.tagItemHeader h2.tagItemTitle,
		div.userBlock h2,
		div.latestItemsCategory h2,
		div.latestItemHeader h2.latestItemTitle,
		div.itemIsFeatured h2, 
		div.catItemIsFeatured h3, 
		div.userItemIsFeatured h3,
		div.catItemHeader h3.catItemTitle,
		div.itemCommentsForm h3,
		div.userItemHeader h3.userItemTitle,
		h3.itemAuthorName { 
			font-size: <?php echo htmlspecialchars($articleMobileTitleFontSize); ?> ; 
		}
	}
<?php } ?>
<?php // Module Mobile Title Font Size
if ($moduleMobileTitleFontSize) { ?>
	@media (max-width: 480px) {
		.moduletable h3,
		.moduletable .custom h3,
		div[class^="moduletable-"] h3,
		div[class*=" moduletable-"] h3 { 
			font-size: <?php echo htmlspecialchars($moduleMobileTitleFontSize); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Advert
if ($mobileShowAdvert) { ?>
	@media (max-width: 480px) {
		#fav-advertwrap { 
			display: <?php echo htmlspecialchars($mobileShowAdvert); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Intro1
if ($mobileShowIntro1) { ?>
	@media (max-width: 480px) {
		#fav-intro1 { 
			display: <?php echo htmlspecialchars($mobileShowIntro1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Intro2
if ($mobileShowIntro2) { ?>
	@media (max-width: 480px) {
		#fav-intro2 { 
			display: <?php echo htmlspecialchars($mobileShowIntro2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Intro3
if ($mobileShowIntro3) { ?>
	@media (max-width: 480px) {
		#fav-intro3 { 
			display: <?php echo htmlspecialchars($mobileShowIntro3); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Intro4
if ($mobileShowIntro4) { ?>
	@media (max-width: 480px) {
		#fav-intro4 { 
			display: <?php echo htmlspecialchars($mobileShowIntro4); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Slide1
if ($mobileShowSlide1) { ?>
	@media (max-width: 480px) {
		#fav-slide1 { 
			display: <?php echo htmlspecialchars($mobileShowSlide1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Slide2
if ($mobileShowSlide2) { ?>
	@media (max-width: 480px) {
		#fav-slide2 { 
			display: <?php echo htmlspecialchars($mobileShowSlide2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Showcase1
if ($mobileShowShowcase1) { ?>
	@media (max-width: 480px) {
		#fav-showcase1 { 
			display: <?php echo htmlspecialchars($mobileShowShowcase1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Showcase2
if ($mobileShowShowcase2) { ?>
	@media (max-width: 480px) {
		#fav-showcase2 { 
			display: <?php echo htmlspecialchars($mobileShowShowcase2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Showcase3
if ($mobileShowShowcase3) { ?>
	@media (max-width: 480px) {
		#fav-showcase3 { 
			display: <?php echo htmlspecialchars($mobileShowShowcase3); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Showcase4
if ($mobileShowShowcase4) { ?>
	@media (max-width: 480px) {
		#fav-showcase4 { 
			display: <?php echo htmlspecialchars($mobileShowShowcase4); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Promo1
if ($mobileShowPromo1) { ?>
	@media (max-width: 480px) {
		#fav-promo1 { 
			display: <?php echo htmlspecialchars($mobileShowPromo1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Promo2
if ($mobileShowPromo2) { ?>
	@media (max-width: 480px) {
		#fav-promo2 { 
			display: <?php echo htmlspecialchars($mobileShowPromo2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Promo3
if ($mobileShowPromo3) { ?>
	@media (max-width: 480px) {
		#fav-promo3 { 
			display: <?php echo htmlspecialchars($mobileShowPromo3); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Top1
if ($mobileShowTop1) { ?>
	@media (max-width: 480px) {
		#fav-top1 { 
			display: <?php echo htmlspecialchars($mobileShowTop1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Top2
if ($mobileShowTop2) { ?>
	@media (max-width: 480px) {
		#fav-top2 { 
			display: <?php echo htmlspecialchars($mobileShowTop2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Top3
if ($mobileShowTop3) { ?>
	@media (max-width: 480px) {
		#fav-top3 { 
			display: <?php echo htmlspecialchars($mobileShowTop3); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Top4
if ($mobileShowTop4) { ?>
	@media (max-width: 480px) {
		#fav-top4 { 
			display: <?php echo htmlspecialchars($mobileShowTop4); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Maintop1
if ($mobileShowMaintop1) { ?>
	@media (max-width: 480px) {
		#fav-maintop1 { 
			display: <?php echo htmlspecialchars($mobileShowMaintop1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Maintop2
if ($mobileShowMaintop2) { ?>
	@media (max-width: 480px) {
		#fav-maintop2 { 
			display: <?php echo htmlspecialchars($mobileShowMaintop2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Maintop3
if ($mobileShowMaintop3) { ?>
	@media (max-width: 480px) {
		#fav-maintop3 { 
			display: <?php echo htmlspecialchars($mobileShowMaintop3); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Sidebar1
if ($mobileShowSidebar1) { ?>
	@media (max-width: 480px) {
		#fav-sidebar1 { 
			display: <?php echo htmlspecialchars($mobileShowSidebar1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Sidebar2
if ($mobileShowSidebar2) { ?>
	@media (max-width: 480px) {
		#fav-sidebar2 { 
			display: <?php echo htmlspecialchars($mobileShowSidebar2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Mainbottom1
if ($mobileShowMainbottom1) { ?>
	@media (max-width: 480px) {
		#fav-mainbottom1 { 
			display: <?php echo htmlspecialchars($mobileShowMainbottom1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Mainbottom2
if ($mobileShowMainbottom2) { ?>
	@media (max-width: 480px) {
		#fav-mainbottom2 { 
			display: <?php echo htmlspecialchars($mobileShowMainbottom2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Mainbottom3
if ($mobileShowMainbottom3) { ?>
	@media (max-width: 480px) {
		#fav-mainbottom3 { 
			display: <?php echo htmlspecialchars($mobileShowMainbottom3); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Bottom1
if ($mobileShowBottom1) { ?>
	@media (max-width: 480px) {
		#fav-bottom1 { 
			display: <?php echo htmlspecialchars($mobileShowBottom1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Bottom2
if ($mobileShowBottom2) { ?>
	@media (max-width: 480px) {
		#fav-bottom2 { 
			display: <?php echo htmlspecialchars($mobileShowBottom2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Bottom3
if ($mobileShowBottom3) { ?>
	@media (max-width: 480px) {
		#fav-bottom3 { 
			display: <?php echo htmlspecialchars($mobileShowBottom3); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Bottom4
if ($mobileShowBottom4) { ?>
	@media (max-width: 480px) {
		#fav-bottom4 { 
			display: <?php echo htmlspecialchars($mobileShowBottom4); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show User1
if ($mobileShowUser1) { ?>
	@media (max-width: 480px) {
		#fav-user1 { 
			display: <?php echo htmlspecialchars($mobileShowUser1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show User2
if ($mobileShowUser2) { ?>
	@media (max-width: 480px) {
		#fav-user2 { 
			display: <?php echo htmlspecialchars($mobileShowUser2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show User3
if ($mobileShowUser3) { ?>
	@media (max-width: 480px) {
		#fav-user3 { 
			display: <?php echo htmlspecialchars($mobileShowUser3); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Footer1
if ($mobileShowFooter1) { ?>
	@media (max-width: 480px) {
		#fav-footer1 { 
			display: <?php echo htmlspecialchars($mobileShowFooter1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Footer2
if ($mobileShowFooter2) { ?>
	@media (max-width: 480px) {
		#fav-footer2 { 
			display: <?php echo htmlspecialchars($mobileShowFooter2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Footer3
if ($mobileShowFooter3) { ?>
	@media (max-width: 480px) {
		#fav-footer3 { 
			display: <?php echo htmlspecialchars($mobileShowFooter3); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Footer4
if ($mobileShowFooter4) { ?>
	@media (max-width: 480px) {
		#fav-footer4 { 
			display: <?php echo htmlspecialchars($mobileShowFooter4); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Copyright1
if ($mobileShowCopyright1) { ?>
	@media (max-width: 480px) {
		#fav-copyright1 { 
			display: <?php echo htmlspecialchars($mobileShowCopyright1); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Copyright2
if ($mobileShowCopyright2) { ?>
	@media (max-width: 480px) {
		#fav-copyright2 { 
			display: <?php echo htmlspecialchars($mobileShowCopyright2); ?> ; 
		}
	}
<?php } ?>
<?php // Mobile Show Debug
if ($mobileShowDebug) { ?>
	@media (max-width: 480px) {
		#fav-debug { 
			display: <?php echo htmlspecialchars($mobileShowDebug); ?> ; 
		}
	}
<?php } ?>

</style>