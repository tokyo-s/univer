from Hospital import Hospital
from Department import Department
from Staff import Staff
from datetime import datetime
def main():

    hospital = Hospital('Nr.1','Stack-Overflow',69228322)
    department = Department('ML')
    hospital.addDepartment(department)
    hospital.printDepartments()
    birth = datetime(2001,7,5)
    angajat = datetime(2021,9,9)
    staff = Staff("Engineer","Vladimir","Serghei","Stojoc",birth,'M',"valea crucii 22",69322228,angajat,"high","MDOSE","russian") # Date add joined date
    department.addStaff(staff)
    department.printStaff()
    hospital.printDepartments()


if __name__ == '__main__':
    main()

