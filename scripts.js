document.getElementById("btnSubmit").disabled = true;

function handleClick() {

    var answers = [false, false, false, false, false]

    for(i = 0; i <= 5; i++){
        var quest = document.getElementsByName("question"+i);
            for (var j=0; j < quest.length; j++){
            if(quest[j].checked){
                answers[i-1] = true;
            }
        }
    }

    for (var i = 0; i < answers.length; i++) {
        if (answers[i] === false) {
            document.getElementById("btnSubmit").disabled = true;
            break;
        }
        else {
            document.getElementById("btnSubmit").disabled = false;
            document.getElementById("btnSubmit").addEventListener('mouseover',() => {
                document.getElementById("btnSubmit").style.cursor = 'pointer';
            })
        }
    };
};
   
function clearAnswers() {   

    for(i = 0; i <= 5; i++){
        var quest = document.getElementsByName("question"+i);        
        for (var j=0; j < quest.length; j++){
            quest[j].checked = false;            
        }
    }

    document.getElementById("btnSubmit").disabled = true;
    
    document.getElementById("btnSubmit").addEventListener('mouseover',() => {
        document.getElementById("btnSubmit").style.cursor = 'default';
    })   
}

// function clearQuestion() {

//     var quest = document.getElementsById("question1");
//     for (var i = 0; i < quest.length; i++){
//         quest[i-1].checked = false;            
//     }      
// }







