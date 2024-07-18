//Categorizing Data

/* Input Json */
const employeeDataIn = {
    employee_1:{
        empid: "101",
        empname:"Vikram",
        empexperience: "2",
        empsalary: "10000",
        empdepartment: "IT"
    },
    employee_2:{
        empid: "102",
        empname:"Surya",
        empexperience: "3",
        empsalary: "20000",
        empdepartment: "IT"
    },
    employee_3:{
        empid: "103",
        empname:"Kamal",
        empexperience: "5",
        empsalary: "30000",
        empdepartment: "Finance"
    },
    employee_4:{
        empid: "104",
        empname:"Dhanush",
        empexperience: "2",
        empsalary: "15000",
        empdepartment: "Finance"
    },
    employee_5:{
        empid: "105",
        empname:"Surya",
        empexperience: "3",
        empsalary: "20000",
        empdepartment: "HR"
    },
    employee_6:{
        empid: "106",
        empname:"Kamal",
        empexperience: "5",
        empsalary: "30000",
        empdepartment: "HR"
    },
}
/* Input Json */


/* Logic Implementation Function */
let employeeDataOut = {}
function dataCategorizer(data, key){

        for (const employeeKey in data) {
        const employee = data[employeeKey];
        if (employee[key] === categoryValue) {
            employeeDataOut[employeeKey] = employee;
        }
    }

    /* Write your logic here --- Start */
   /* Here, we made a loop in which the data of the variable {employeeDataIn} is been iterated containing 
    a unique key with some values. If the key matches the value of the {categoryValue} mentioned for the function to call,
    we will print the function {employeeDataOut} displaying each key of the employee. */
    /* Write your logic here --- End */
    
    console.log(employeeDataOut);
}
/* Logic Implementation Function */


/* Function Call */
const categoryKey = 'empdepartment'
const categoryValue = 'HR'
dataCategorizer(employeeDataIn, categoryKey)



/* Function Call */

/* Expected Output */
/*
{
    employee_3:{
        empid: "103",
        empname:"Kamal",
        empexperience: "5",
        empsalary: "30000",
        empdepartment: "Finance"
    },
    employee_6:{
        empid: "106",
        empname:"Kamal",
        empexperience: "5",
        empsalary: "30000",
        empdepartment: "HR"
    }
} */
/* Expected Output */