from Front_Desk_Staff import  Front_Desk_Staff


class Receptionist(Front_Desk_Staff):

    def __init__(self,title, givenName, middleName, familyName, name, birthDate, gender, homeAddress, phone, joined, education, certification, languages):
        super().__init__(title, givenName, middleName, familyName, name, birthDate, gender, homeAddress, phone, joined, education, certification, languages)