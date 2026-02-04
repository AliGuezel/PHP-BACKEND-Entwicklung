{if isset($smarty.get.nav)}
    {if $smarty.get.nav == 'kontakt'}
        {include file="kontakt.tpl"}
    {elseif $smarty.get.nav == 'impressum'}    
        {include file="impressum.tpl"}
    {else}
        {include file="startseite.tpl"}
    {/if}    
{else}    
    {include file="startseite.tpl"}
{/if}
