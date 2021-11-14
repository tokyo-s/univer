from Administrative_Staff import  Administrative_Staff


class Front_Desk_Staff(Administrative_Staff):

    def __init__(self,title, givenName, middleName, familyName, name, birthDate, gender, homeAddress, phone, joined, education, certification, languages):
        super().__init__(title, givenName, middleName, familyName, name, birthDate, gender, homeAddress, phone, joined, education, certification, languages)