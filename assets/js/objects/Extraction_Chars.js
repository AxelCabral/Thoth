class Extraction_Chars {
	constructor(id, type, data) {
		this.id = id;
		this.type = type;
		this.data = data;
		this.char = null;
	}

	show() {
		let parent = document.getElementById('tab_ex');

		let card = document.createElement('div');
		card.classList.add("card");


		let card_body = document.createElement('div');
		card_body.classList.add("card-body");

		let div_char = document.createElement('div');
		div_char.id = this.id;

		card_body.appendChild(div_char);
		card.appendChild(card_body);
		parent.appendChild(card);

		switch (this.type) {
			case "Multiple Choice List":
				break;
			case "Pick One List":
				console.log(this.data);
				this.char = Highcharts.chart(this.id, {
					chart: {
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false,
						type: 'pie'
					},
					title: {
						text: 'Answers to the question ' + this.id
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b> ({point.y})'
					},
					plotOptions: {
						column: {
							colorByPoint: true
						},
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: true,
								format: '<b>{point.name}</b>: {point.percentage:.1f} %',
								style: {
									color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
								}
							}
						}
					},
					series: [{
						name: 'Brands',
						colorByPoint: true,
						data: this.data
					}]
				});
				break;
		}
	}

}
