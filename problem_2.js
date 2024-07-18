// Calculate Cutoff for Given Marks
// Check Whether he/she is eligible to apply the course

/* Input */
const studentMarks = {
    "maths": 78,
    "physics": 85,
    "chemistry": 62,
    "biology": 90
};
/* Input */


/* Logic Implementation Function */
let cutoff = 0
function calculateCutoff(marksJson) {
    
    /* Write your logic here --- Start */
    let totalMarks = 0;
    let subjectCount = 0;

    for(let subject in marksJson){
        totalMarks=totalMarks+marksJson[subject];
        subjectCount++;
    }

    let averageMarks = totalMarks/subjectCount;
    cutoff=averageMarks;

    /* Write your logic here --- End */
    console.log('The cutoff is:'+ cutoff);
}
/* Logic Implementation Function */


/* Logic Implementation Function */
const eligibilityCutOff = 75
function checkEligibility(mark){
    /* Write your logic here --- Start */
    console.log(mark)
        if(mark>=eligibilityCutOff){

            console.log('You are Eligible');
        }else{
            console.log('You are not Eligible');
        }
    // this function should return message like "You are Eligible" or "You are not Eligible"

    /* Write your logic here --- End */
}
/* Logic Implementation Function */


/* Function Call */
calculateCutoff(studentMarks);
checkEligibility(cutoff);
/* Function Call */

/* Expected Output */

// The cutoff is: 77.80
// You are Eligible

/* Expected Output */