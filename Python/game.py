def play():
    print('1. 1-100')
    print('2. 1-1000')
    x = int(input('Select interval to play: '))
    if x == 1:
        guess_number(100)
    else:
        guess_number(1000)

def guess_number(limit):
    guessed_number = random.randint(1,limit) # both included
    tries = 10
    print('I think of a number, will you try to guess it?')

    guess = -1
    count = 0
    while guess != guessed_number:

        count=count+1
        tries-=1
        guess = int(input('What is your guess? '))

        if guess > guessed_number:
            print('Nope, My number is smaller!')
        elif guess < guessed_number:
            print('Nope, my number is bigger!')
        else:
            print('Great job, you did it in',count,'moves')
            break
            
        if tries == 0:
            print("You have no more tries, Try again")
            break
        else:
            print(f'You have {tries} tries left')
            
    again = int(input('If you want to play again, press 1, else, press 0\n'))
    if again == 0:
        print('Thanks for the game, had a great time playing with you')
    
import random

while True:  # initially without this while
    play()