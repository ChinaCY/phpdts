<?php if(!defined('IN_GAME')) exit('Access Denied'); ?>
“<span class="yellow">X 按钮</span>”将对你的<span class="lime">命体上限</span>、<span class="lime">全系熟练</span>、<span class="lime">基础攻防</span>进行<span class="yellow">按比例</span>加成，并获得与你的<span class="yellow">等级</span>成正比的<span class="lime">怒气值</span>。但这个按钮<span class="yellow">只能使用一次</span>，且使用后你将<span class="yellow">失去你的称号</span>。<br>
你确认要按这个按钮吗？<br>

<input type="hidden" name="mode" value="sp_pbomb">
<input type="hidden" id="command" name="command" value="menu">

<input type="button" class="cmdbutton" onclick="$('command').value='YES';postCmd('gamecmd','command.php');this.disabled=true;" value="确认">

<input type="button" class="cmdbutton" onclick="postCmd('gamecmd','command.php');this.disabled=true;" value="返回">

