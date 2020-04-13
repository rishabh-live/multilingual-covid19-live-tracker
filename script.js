window.onload = () => {
	retriver();
}


//Retrive Data
function retriver()
{

	 var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();	

}


function loadTableData(data){

	var newData = JSON.parse(data);

	var newDataSorted = newData.sort(function(a,b){
		return b.cases - a.cases;
	})

	const tableBody = document.getElementById('myTableBody');

	let dataHtml = '';
	var i =1;

	const url = window.location.href;
	//const params = new URLSearchParams(url.search);
	//console.log(params);
	//console.log(params.get("lang"));
	//console.log(this.$route.params.lang);

	for(let data of newDataSorted){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}


	tableBody.innerHTML = dataHtml;

	//console.log(new);
}

function countryFunc()
{	
	

	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadCountryTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();

}

function loadCountryTableData(data){

	const tableBody = document.getElementById('myTableBody');
	let dataHtml = '';

	var newData = JSON.parse(data);
	var i = 1;

	for(let data of newData){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}
tableBody.innerHTML = dataHtml;
}
function todayCases()
{	
	

	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadtcTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();

}

function loadtcTableData(data){

	var newData = JSON.parse(data);

	var newDataSorted = newData.sort(function(a,b){
		return b.todayCases - a.todayCases;
	})

	const tableBody = document.getElementById('myTableBody');

	let dataHtml = '';
	var i =1;

	const url = window.location.href;
	//const params = new URLSearchParams(url.search);
	//console.log(params);
	//console.log(params.get("lang"));
	//console.log(this.$route.params.lang);

	for(let data of newDataSorted){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}
tableBody.innerHTML = dataHtml;
}



function death()
{	
	

	

	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadDeathsTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();

}

function loadDeathsTableData(data){

	var newData = JSON.parse(data);

	var newDataSorted = newData.sort(function(a,b){
		return b.deaths - a.deaths;
	})

	const tableBody = document.getElementById('myTableBody');

	let dataHtml = '';
	var i =1;

	const url = window.location.href;
	//const params = new URLSearchParams(url.search);
	//console.log(params);
	//console.log(params.get("lang"));
	//console.log(this.$route.params.lang);

	for(let data of newDataSorted){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}


	tableBody.innerHTML = dataHtml;
}


function todaydeath()
{	
	

	

	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadtDeathsTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();

}

function loadtDeathsTableData(data){

	var newData = JSON.parse(data);

	var newDataSorted = newData.sort(function(a,b){
		return b.todayDeaths - a.todayDeaths;
	})

	const tableBody = document.getElementById('myTableBody');

	let dataHtml = '';
	var i =1;

	const url = window.location.href;
	//const params = new URLSearchParams(url.search);
	//console.log(params);
	//console.log(params.get("lang"));
	//console.log(this.$route.params.lang);

	for(let data of newDataSorted){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}


	tableBody.innerHTML = dataHtml;
}



function recoverd()
{	
	

	

	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadrecoveredTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();

}

function loadrecoveredTableData(data){

	var newData = JSON.parse(data);

	var newDataSorted = newData.sort(function(a,b){
		return b.recovered - a.recovered;
	})

	const tableBody = document.getElementById('myTableBody');

	let dataHtml = '';
	var i =1;

	const url = window.location.href;
	//const params = new URLSearchParams(url.search);
	//console.log(params);
	//console.log(params.get("lang"));
	//console.log(this.$route.params.lang);

	for(let data of newDataSorted){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}


	tableBody.innerHTML = dataHtml;
}



function infected()
{	
	

	

	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadinfectedTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();

}

function loadinfectedTableData(data){

	var newData = JSON.parse(data);

	var newDataSorted = newData.sort(function(a,b){
		return b.active - a.active;
	})

	const tableBody = document.getElementById('myTableBody');

	let dataHtml = '';
	var i =1;

	const url = window.location.href;
	//const params = new URLSearchParams(url.search);
	//console.log(params);
	//console.log(params.get("lang"));
	//console.log(this.$route.params.lang);

	for(let data of newDataSorted){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}


	tableBody.innerHTML = dataHtml;
}



function critical()
{	
	

	

	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadCRITICALTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();

}

function loadCRITICALTableData(data){

	var newData = JSON.parse(data);

	var newDataSorted = newData.sort(function(a,b){
		return b.critical - a.critical;
	})

	const tableBody = document.getElementById('myTableBody');

	let dataHtml = '';
	var i =1;

	const url = window.location.href;
	//const params = new URLSearchParams(url.search);
	//console.log(params);
	//console.log(params.get("lang"));
	//console.log(this.$route.params.lang);

	for(let data of newDataSorted){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}


	tableBody.innerHTML = dataHtml;
}

function casespm()
{	
	

	

	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadCPMTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();

}

function loadCPMTableData(data){

	var newData = JSON.parse(data);

	var newDataSorted = newData.sort(function(a,b){
		return b.casesPerOneMillion - a.casesPerOneMillion;
	})

	const tableBody = document.getElementById('myTableBody');

	let dataHtml = '';
	var i =1;

	const url = window.location.href;
	//const params = new URLSearchParams(url.search);
	//console.log(params);
	//console.log(params.get("lang"));
	//console.log(this.$route.params.lang);

	for(let data of newDataSorted){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}


	tableBody.innerHTML = dataHtml;
}


function deathspm()
{	
	

	

	var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            loadDPMTableData(this.responseText);
       }
    };
    xhttp.open("GET", "https://corona.lmao.ninja/countries/", true);
    xhttp.send();

}

function loadDPMTableData(data){

	var newData = JSON.parse(data);

	var newDataSorted = newData.sort(function(a,b){
		return b.deathsPerOneMillion - a.deathsPerOneMillion;
	})

	const tableBody = document.getElementById('myTableBody');

	let dataHtml = '';
	var i =1;

	const url = window.location.href;
	//const params = new URLSearchParams(url.search);
	//console.log(params);
	//console.log(params.get("lang"));
	//console.log(this.$route.params.lang);

	for(let data of newDataSorted){
		dataHtml += `<tr><td style="height:30px;"><a  href="${window.location.search.split("&")[0]}&${window.location.search.split("&")[1]}&country=${data.country}&rank=${i}">${data.country}</a></td><td style="height:30px; text-align: center;">${data.cases}</td><td style="height:30px; text-align: center;">${data.todayCases}</td><td style="height:30px; text-align: center;">${data.deaths}</td><td style="height:30px; text-align: center;">${data.todayDeaths}</td><td style="height:30px; text-align: center;">${data.recovered}</td><td style="height:30px; text-align: center;">${data.active}</td><td style="height:30px; text-align: center;">${data.critical}</td><td style="height:30px; text-align: center;" id="nomobile">${data.casesPerOneMillion}</td><td style="height:30px; text-align: center;" id="nomobile">${data.deathsPerOneMillion}</td></tr>`;
		i++;
	}


	tableBody.innerHTML = dataHtml;
}