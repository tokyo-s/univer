from Technologist import  Technologist


class Surgical_Technologist(Technologist):

    def __init__(self,title, givenName, middleName, familyName, name, birthDate, gender, homeAddress, phone, joined, education, certification, languages):
        super().__init__(title, givenName, middleName, familyName, name, birthDate, gender, homeAddress, phone, joined, education, certification, languages)