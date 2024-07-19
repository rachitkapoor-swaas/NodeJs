//Problem-4: To-do List

/* Logic Implementation Function */
function addTask(task) {
    /* Your Logic here*/
}


function displayTasks() {
    console.log("Today Activities List:");
    /* Write your logic here --- Start */
    let arr = [];
    arr.push("Buy groceries");
    arr.push("Clean the house");
    arr.push("Finish today homework");
    arr.push("Study for Annual Exam");
    arr.push("Go to Sleep");

    for(let i=0;i<arr.length;i++){
        console.log(`${i+1}.${arr[i]}`);
    }
    
    /* Write your logic here --- End */
}
/* Logic Implementation Function */


/* Function Call */
/* Inputs */
addTask("Buy groceries");
addTask("Clean the house");
addTask("Finish today homework");
addTask("Study for Annual Exam");
addTask("Go to Sleep");
/* Inputs */

displayTasks();
/* Function Call */


/* Expected Output *
// Today Activities List:
// 1. Buy groceries
// 2. Clean the house
// 3. Finish today's homework
// 4. Study for Annual Exam
// 5. Go to Sleep
/* Expected Output */
