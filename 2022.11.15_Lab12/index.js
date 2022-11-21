console.log("*** ARRAY ***")

let a = [4,55,89,11,77,21,1,99]
let b = [11,12]
console.log("Initial array 1: "+a)
console.log("Initial array 2: "+b)

console.log("Concatenated: "+a.concat(b))

let joins=a.join(" and ")
console.log("Joined: "+joins)

console.log("Index of 11: "+a.indexOf(11))
console.log("Sorted array a: "+a.sort())

a.push(5)
a.push(33)
console.log("Array after pushing: "+a)

a.pop()
console.log("Array after pop operation: "+a)

console.log("*** STRING ***")

let str="Apple"
let str2="iPhone"
console.log("Character at 0 index: "+str.charAt(0))
console.log("Index of e "+str.indexOf('e'))
console.log("Concatenated string: "+str.concat(str2))
let str3="Hi my name is Apple"
console.log("Whether string qwwq exists: "+str3.match(/qwwq/))
console.log("Replacing Apple with Samsung: "+str3.replace(/Apple/,'Samsung'))

console.log("*** DATE ***")

const d = new Date();
console.log("Today's Date Details: "+d)
console.log("Time now in miliseconds: "+d.getTime())
console.log("Month now: "+(d.getMonth()+1))
console.log("Date now: "+d.getDate())

