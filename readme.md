# WordPress theme for Rishry media

## Develop environment

- Vite( need to Node.js >=ver16.0.0)
- Local by Flywheel
  
## Install

### N install for swiching Node.js
example: https://qiita.com/tora_oba/items/2761452fe8c2b0035ba0

Vite install
``` npm install ```

Vite start
``` npm run dev ```

You need to stop
``` Ctrl + c ```

Local start
Use Local by Flywheel

## Usage

### scss

You need use CSS variable + set value.

example
```
background: url( $base-dir + 'assets/images/dummy.jpg' );
```

Not use sub directory for css images.

### develop mode

functions.php
```
3: define( "IS_VITE_DEVELOPMENT", true );
```

Git pull request to develop branch

### release

1. False to develop mode

functions.php
```
3: define( "IS_VITE_DEVELOPMENT", false );
```

2. compile

```
npm run build
```

3. Git pull request to main branch

4. Auto merge server