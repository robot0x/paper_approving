	<div>
        <a class="button"  href="{:U('add')}" >添加自定义菜单</a>
        <a class="button"  href="{:U('createMenu')}" >生成菜单至公众账号
</a>
    </div>
	<table>
		<tr>
			<th>序号</th>
			<th>标题</th>
			<th>上级菜单</th>
			<th>关键字</th>
			<th>类型</th>
			<th>操作</th>
		</tr>
		<foreach name="M:getMenus()" item="menu" key="k">
			<tr>
				<td>{++$k}</td>
				<td>{$menu['name']}</td>
				<td>{$menu['pid']}</td>
				<td>{$menu['keyword']}</td>
				<td>{$menu['type']}</td>
				<td>{$menu['content']}</td>
				<td><a class="button" href="{:U('edit?id='.$menu['id'])}">编辑</a></td>
				<td><a class="button" href="{:U('delete?id='.$menu['id'])}">删除</a></td>
			</tr>
		</foreach>	
	</table>
	{$page}