google.charts.load('current', {packages:["orgchart"]});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
	var data = new google.visualization.DataTable();
	data.addColumn('string', 'Name');
	data.addColumn('string', 'Manager');
	data.addColumn('string', 'ToolTip');

	// For each orgchart box, provide the name, manager, and tooltip to show.
	data.addRows([
		[{v:'Ifrit', f:'<img src="http://vignette1.wikia.nocookie.net/summoners-war-sky-arena/images/8/86/Ifrit_%28Dark%29_Icon.png"/><br>Ifrit <div style="color:black; font-style:italic">Dark</div>'},
		 '', 'The President'],
		[{v:'Argen', f:'<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/c/ce/Vampire_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213075620"/><br>Argen (Vampire)<div style="color:yellow; font-style:italic">Wind</div><div>Số lượng: 0</div>'},
		 'Ifrit', 'VP'],
		 [{v:'Akia', f:'<img src="http://vignette1.wikia.nocookie.net/summoners-war-sky-arena/images/8/84/Succubus_%28Fire%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080545&format=webp"/><br>Akia (Succubus)<div style="color:red; font-style:italic">Fire</div><div>Số lượng: 0</div>'},
		 'Ifrit', 'VP'],
		 [{v:'Mikene', f:'<img src="http://vignette2.wikia.nocookie.net/summoners-war-sky-arena/images/c/c6/Undine_%28Water%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213081040"/><br>Mikene (Undine)<div style="color:blue; font-style:italic">Water</div><div>Số lượng: 0</div>'},
		 'Ifrit', 'VP'],
		[{v: 'Kumae', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/4/4b/Yeti_%28Dark%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213081544"/><br>Kumae (Yeti) <div style="color:black; font-style:italic">Dark</div><div>Số lượng: 0</div>'}, 'Ifrit', ''],
		[{v: 'Velfinodon', f: '<img src="http://vignette1.wikia.nocookie.net/summoners-war-sky-arena/images/9/96/Lizardman_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141028103435"/><br>Velfinodon (Lizardman) <div style="color:yellow; font-style:italic">Wind</div><div>Số lượng: 0</div>'}, 'Argen', ''],
		[{v: 'Minotauros', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/6/6a/Minotauros_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141028103240"/><br>Minotauros (Eintau) <div style="color:yellow; font-style:italic">Wind</div><div>Số lượng: 0</div>'}, 'Velfinodon', ''],
		[{v: 'Iron', f: '<img src="http://vignette2.wikia.nocookie.net/summoners-war-sky-arena/images/1/12/Living_Armor_%28Fire%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213074427"/><br>Iron (Living Armor)<div style="color:black; font-style:italic">Fire</div>'}, 'Minotauros', ''],
		[{v: 'Kacey', f: '<img src="http://vignette2.wikia.nocookie.net/summoners-war-sky-arena/images/7/79/Pixie_%28Water%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213081742"/><br>Kacey (Pixie)<div style="color:blue; font-style:italic">Water</div>'}, 'Iron', ''],
		[{v: 'Nangrim', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/5/56/Beast_Hunter_%28Fire%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141230141244"/><br>Nangrim (Beast Hunter)<div style="color:red; font-style:italic">Fire</div><div>Số lượng: 0</div>'}, 'Akia', ''],
		[{v: 'Krakdon', f: '<img src="http://vignette2.wikia.nocookie.net/summoners-war-sky-arena/images/c/ca/Salamander_%28Fire%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213081318"/><br>Krakdon (Salamander)<div style="color:red; font-style:italic">Fire</div><div>Số lượng: 0</div>'}, 'Nangrim', ''],
		[{v: 'Ramira', f: '<img src="http://vignette4.wikia.nocookie.net/summoners-war-sky-arena/images/a/a0/Harpy_%28Water%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213081636"/><br>Ramira (Harpy)<div style="color:blue; font-style:italic">Water</div>'}, 'Krakdon', ''],
		[{v: 'Gruda', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/a/a6/Harpu_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080421"/><br>Seal (Harpu)<div style="color:yellow; font-style:italic">Wind</div>'}, 'Mikene', ''],
		[{v: 'Hemos', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/a/a6/Harpu_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080421"/><br>Seal (Harpu)<div style="color:yellow; font-style:italic">Wind</div>'}, 'Gruda', ''],
		[{v: 'Anduril', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/a/a6/Harpu_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080421"/><br>Seal (Harpu)<div style="color:yellow; font-style:italic">Wind</div>'}, 'Hemos', ''],
		[{v: 'Cogma', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/a/a6/Harpu_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080421"/><br>Seal (Harpu)<div style="color:yellow; font-style:italic">Wind</div>'}, 'Anduril', ''],
		[{v: 'Seal', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/a/a6/Harpu_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080421"/><br>Seal (Harpu)<div style="color:yellow; font-style:italic">Wind</div>'}, 'Ramira', ''],
		[{v: 'Seal', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/a/a6/Harpu_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080421"/><br>Seal (Harpu)<div style="color:yellow; font-style:italic">Wind</div>'}, 'Ramira', ''],
		[{v: 'Seal', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/a/a6/Harpu_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080421"/><br>Seal (Harpu)<div style="color:yellow; font-style:italic">Wind</div>'}, 'Ramira', ''],
		[{v: 'Seal', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/a/a6/Harpu_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080421"/><br>Seal (Harpu)<div style="color:yellow; font-style:italic">Wind</div>'}, 'Ramira', ''],
		[{v: 'Seal', f: '<img src="http://vignette3.wikia.nocookie.net/summoners-war-sky-arena/images/a/a6/Harpu_%28Wind%29_Icon.png/revision/latest/scale-to-width-down/85?cb=20141213080421"/><br>Seal (Harpu)<div style="color:yellow; font-style:italic">Wind</div>'}, 'Ramira', ''],
	]);

	// Create the chart.
	var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
	// Draw the chart, setting the allowHtml option to true for the tooltips.
	chart.draw(data, {allowHtml:true});
}