from Patient import Patient
from Department import Department
class Hospital:

    def __init__(self, name, address, phone):
        self.__phone = phone
        self.__address = address
        self.__name = name

        self.__departments = []
        self.__patients = []


    @property
    def get_phone(self):
        return self.__phone

    @property
    def get_address(self):
        return self.__address

    @property
    def get_name(self):
        return self.__name

    def addPatient(self, patient : Patient):
        if patient in self.__patients:
            print('Already in patients list')
        else:
            if isinstance(patient, Patient):
                self.__patients.append(patient)
            else:
                raise Exception('Error, introduced data is not a patient')


    def addDepartment(self, department: Department):
        if department in self.__departments:
            print('Already in department list')
        else:
            if isinstance(department, Department):
                self.__departments.append(department)
            else:
                raise Exception('Error, wrong department')

    def printDepartments(self):
        for dep in self.__departments:
            print(dep)

    def printPatients(self):
        for pat in self.__patients:
            print(pat)
