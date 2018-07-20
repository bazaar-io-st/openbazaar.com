<link rel="stylesheet" href="<?=asset_url()?>/css/hybrid.css">
<script src="http://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.4.0/highlight.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/highlightjs-line-numbers.js/2.3.0/highlightjs-line-numbers.min.js"></script>
<script>
    hljs.initHighlightingOnLoad();
    hljs.initLineNumbersOnLoad({singleLine: true});

    function loadWidget() {
        var peerID = $('#frm-widget-input').val();
        if(peerID != "") {
         $('#widget-code').val('&#x3C;iframe id=&#x22;widget-iframe&#x22; src=&#x22;/widget-code/'+peerID+'&#x22; frameBorder=&#x22;0&#x22; height=&#x22;550&#x22; width=&#x22;342&#x22;&#x3E;&#x3C;/iframe&#x3E;');
         $('#source-code').html('&#x3C;iframe id=&#x22;widget-iframe&#x22; src=&#x22;/widget-code/'+peerID+'&#x22; frameBorder=&#x22;0&#x22; height=&#x22;550&#x22; width=&#x22;342&#x22;&#x3E;&#x3C;/iframe&#x3E;');
         $('pre code').each(function(i, block) {
           hljs.highlightBlock(block);
         });
         hljs.initLineNumbersOnLoad({singleLine: true});
         $("#widget-iframe").attr("src", "/widget-code/"+peerID);
        }
    }

</script>
<div class="Rectangle-10 clearfix">
   <div class="Page-Sub-Content clearfix Page-Sub-Content-Mobile">
      <div class="Listing-Box" style="padding-bottom: 0; text-align: center;padding-left:0;padding-right:0;">
         <!-- social sharing stuff -->
         <div style="margin-bottom: 5px">
            <a href="https://twitter.com/intent/tweet?text=🔥Get $10 in Bitcoin towards your first purchase on @OpenBazaar! Visit: https://openbazaar.com/bitcoin-promotion %23bitcoin %23btc $btc" target="_blank" title="Share on Twitter"><img src="<?=asset_url()?>img/icon-twitter.png" height=12.5 style="margin-right: 5px" /></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?=base_url()?>/bitcoin-promotion" target="_blank"><img src="<?=asset_url()?>img/icon-facebook.png" height=12.5 style="margin-right: 5px" target="_blank" title="Share on Facebook"/></a>
            <a href="http://pinterest.com/pin/create/button/?url=<?=base_url()?>/bitcoin-promotion&media=<?=base_url()?>/img/openbazaar-2.0-teaser.jpg&description=🔥Get $10 in Bitcoin towards your first purchase on OpenBazaar!" target="_blank"  title="Share on Pinterest"><img src="<?=asset_url()?>img/icon-pinterest.png" height=12.5 target="_blank"/></a>
         </div>
         <h1 style="text-align: center; margin: 10px 0 0 0; font-size: 30px;">Store Widget Builder</h1>
         <div style="text-align: center; margin-bottom: 5px; color: #777">Create an embeddable OpenBazaar store widget for your website</div>
         <form action="javascript:void();">
            <div class="Widget-Search-Box">
               <div class="Widget-Search-Box-Left">
                  <input id="frm-widget-input" type="text" placeholder="Enter a OpenBazaar ID..." value="" />
               </div>
               <div class="Widget-Search-Box-Right">
                  <button class="Search-Button" type="button" onclick="loadWidget()" style="width:100px;height:51px;">
                     <div class="Search">Create</div>
                  </button>
               </div>
            </div>
         </form>
         <div class="widget-panel">
            <iframe id="widget-iframe" src="/widget-code/QmcUDmZK8PsPYWw5FRHKNZFjszm2K6e68BQSTpnJYUsML7" frameBorder="0" height="550" width="342"></iframe>

         </div>
         <div class="separator"></div>
         <div style="margin-top: -30px;margin-bottom:30px;z-index:1;width:945px;background-color: #2e2e2e;padding:25px 30px 30px 30px;box-sizing:border-box; text-align:left;overflow-x:hidden">
            <div class="widget-header-dark">Widget Code (IFrame)</div>
            <input type="hidden" id="widget-code" value="&#x3C;iframe id=&#x22;widget-iframe&#x22; src=&#x22;/widget-code/QmcUDmZK8PsPYWw5FRHKNZFjszm2K6e68BQSTpnJYUsML7&#x22; frameBorder=&#x22;0&#x22; height=&#x22;550&#x22; width=&#x22;342&#x22;&#x3E;&#x3C;/iframe&#x3E;"/>
            <pre><code id="source-code" class="html">&#x3C;iframe id=&#x22;widget-iframe&#x22; src=&#x22;/widget-code/QmcUDmZK8PsPYWw5FRHKNZFjszm2K6e68BQSTpnJYUsML7&#x22; frameBorder=&#x22;0&#x22; height=&#x22;550&#x22; width=&#x22;342&#x22;&#x3E;&#x3C;/iframe&#x3E;</code></pre>
         </div>

         <div class="Btn-Copy-Code" onclick="copyToClipboard();">
            <div style="flex:1;">Copy Code</div>
         </div>
         <div style="text-align:left;padding:31px;">
            <div class="widget-header-light">Paste widget code on your website</div>
            <p class="widget-paragraph">Display a preview of your OpenBazaar store directly on your website. Simply
               copy the code above and paste it within the body tag of your website.
            </p>
         </div>
         <div style="text-align:left;padding:31px;">
            <div class="widget-header-light">OpenBazaar Button</div>
            <p class="widget-paragraph">Don't have space for the full widget? Add an OpenBazaar button to your website (example below).</p>
            <div style="display:flex;align-items:center;">
               <div class="openbazaar-share-button">
                  <div><img src="<?=asset_url()?>img/base-rounded.png" srcset="<?=asset_url()?>img/base-rounded@2x.png 2x, <?=asset_url()?>img/base-rounded@3x.png 3x" class="Base-Rounded"></div>
                  <div>Shop my store on OpenBazaar</div>
               </div>
               <div style="padding-left:15px;"><a class="copy-link">Copy button code</a></div>
            </div>
         </div>
      </div>
   </div>
</div>