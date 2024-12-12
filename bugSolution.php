function foo(a, b) {
  if (a === 0) {
    return b;
  }
  if (b === 0) {
    return a;
  }
  if (a < 0 || b < 0){
    return false; // Handle negative numbers
  }
  return foo(a - 1, b - 1);
}

console.log(foo(5, 5)); // Output: 0
console.log(foo(10, 0)); // Output: 10
console.log(foo(0, 10)); // Output: 10
console.log(foo(0, 0)); // Output: 0
console.log(foo(-5,5)); // Output: false
console.log(foo(5,-5)); // Output: false