n,m=map(int,input().split())
li=[]
for i in range(0,n) :
    li.append(list(map(int,input().split())))
n=list(map(int,input().split()))
l=[]
for i in range(0,len(n)) :
    k=li[n[i]-1][1:]
    for j in range(0,len(k)) :
        l.append(k[j])
def max_sum_contiguous(l) :
    max_so_far = 0
    max_ending_here = l[0]
    for i in range(1,len(l)) :
        max_ending_here = max_ending_here + l[i]
        if(max_ending_here < 0) :
            max_ending_here = 0
        if(max_so_far < max_ending_here) :
            max_so_far = max_ending_here
    return max_so_far
print(max_sum_contiguous(l))