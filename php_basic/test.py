import time

for i in range(40 + 1):
    print(f"Progress: {i}/40", end="\r")
    time.sleep(1)

print("Process complete!")
