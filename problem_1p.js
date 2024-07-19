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
};

function dataCategorizer(data, key, categoryValue) {
    return new Promise((resolve, reject) => {
        try {
            let employeeDataOut = {};

            for (const employeeKey in data) {
                const employee = data[employeeKey];
                if (employee[key] === categoryValue) {
                    employeeDataOut[employeeKey] = employee;
                }
            }

            resolve(employeeDataOut);
        } catch (error) {
            reject(error);
        }
    });
}

const categoryKey = 'empdepartment';
const categoryValue = 'HR';

dataCategorizer(employeeDataIn, categoryKey, categoryValue)
    .then(categorizedData => {
        console.log('Categorized Employees:', categorizedData);
    })
    .catch(error => {
        console.error('Error categorizing data:', error);
    });
