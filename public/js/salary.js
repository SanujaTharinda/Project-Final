let dailyRate = 0;

$(function () {
    $.ajax({
        type: 'POST',
        data: {
            search: null
        },
        url: "http://localhost/PostOffice/SalaryController/getSalary",
        success: function (data) {
            displaySearchResults(JSON.parse(data));
        }
    });

});


$( document ).ready(function() {
    $('#DialogDemo').MonthPicker({ MaxMonth: -1,Button: false, OnAfterChooseMonth: function(){ 
        } });
});


function searchMonth(){
    month = document.getElementById("DialogDemo").value;
    searchDetails(month)
}

function displaySearchResults(data) {
  //  console.log(data);
    const tableBody = document.getElementById("#salary-table-body");
    tableBody.innerHTML = '';
    const numberOfRows = data.length;

    if(numberOfRows !=0){
        for (let i = 0; i < numberOfRows; i++) {
            let values = Object.values(data[i]);
            const numberOfColumns = values.length;
            var row = tableBody.insertRow(i);
            row.setAttribute("id", values[i]);

            if(numberOfColumns ==2){
                for (let j = 0; j < numberOfColumns+1; j++){
                    if(j == 2){
                        var cell = row.insertCell(j);
                        cell.innerHTML = '-';
                    }else{
                        var cell = row.insertCell(j);
                        cell.innerHTML = values[j];
                    }
        
                }
            }
            else{
                for (let j = 0; j < numberOfColumns; j++) { 
                    var cell = row.insertCell(j);
                    if(j == 2){
                        cell.innerHTML = "Rs: "+((values[j]*dailyRate).toString());
                    }    
                    else{
                        cell.innerHTML = values[j];
                    }     
                    
                    
            
                }
            }
        }
        $('#inform').css('visibility','hidden')
    }
    else{
        $('#inform').css('visibility','visible')
    }
}

function searchDetails(Searchmonth){
    $.ajax({
        type: 'POST',
        data: {
            search: Searchmonth
        },
        url: "http://localhost/PostOffice/SalaryController/searchSalary",
        success: function (data) {
           displaySearchResults(JSON.parse(data));
        }
    });
}


function setDailyRate(value){
    dailyRate = value;
    
}




