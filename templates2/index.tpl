<html>
<head>
<title>Info</title>
{literal}
<script>
    function alarm(){alert('ALARM');}
</script>
{/literal}
</head>
<body>

<pre>
User Information:

Name: {$name|upper|truncate:10|reverse}
Address: {$address|strrev}
</pre>

<ul>
{foreach $obst as $value}
    <li>{$value|upper}</li>
{/foreach}    
</ul>

{if $name eq 'Fred'}
    Welcome Sir.
{elseif $name eq 'Wilma'}
    Welcome Ma'am.
{else}
    Welcome, whatever you are.
{/if}

{* Mehrzeiliger 
    Kommentar *}

{include file='hallowelt.tpl'}
    
</body>
</html>
