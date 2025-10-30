# Hospital Management System

## 📌 Project Overview

This is the **Hospital Management System** developed as a course-project for the “System Design and Analysis” class by [**Your Name / Team Name**].
It aims to provide a web-based solution for managing hospital operations: patient registration, appointments, doctors, wards, etc.

## 🎯 Key Features

* User roles: Admin, Doctor, Nurse, Receptionist (adjust based on your roles)
* Patient management: add/edit patient records, view history
* Appointment booking and scheduling
* Ward/bed management (if applicable)
* Reporting & analytics (if you built any)
* Responsive frontend interface
* Secure backend data handling

## 🧰 Tech Stack

* **Frontend:** Vue.js (as indicated by the language stats) ([GitHub][1])
* **Backend:** PHP (Laravel or other) ([GitHub][1])
* **Templates / UI:** Blade templates (50.2%) ([GitHub][1])
* **Additional technologies:** JavaScript (~2.0%) ([GitHub][1])
* **Database:** MySQL
* **Project structure:** Front-end folder + Back-end folder (`Frontend-Hospital`, `Backend-Hospital`) ([GitHub][1])

## 🗂 Repository Structure

```
/Frontend-Hospital      # Vue.js UI code  
/Backend-Hospital       # PHP / server-side code  
README.md              # This file  
… other files/folders …
```
```
Folder PATH listing for volume OS
Volume serial number is 80FB-45E0
C:.
+---Backend-Hospital
?   +---app
?   ?   +---Http
?   ?   ?   +---Controllers
?   ?   ?   ?   +---Auth
?   ?   ?   +---Middleware
?   ?   ?   +---Requests
?   ?   ?       +---Auth
?   ?   +---Livewire
?   ?   ?   +---Admin
?   ?   +---Models
?   ?   +---Providers
?   ?   +---View
?   ?       +---Components
?   +---bootstrap
?   ?   +---cache
?   +---config
?   +---database
?   ?   +---factories
?   ?   +---migrations
?   ?   +---seeders
?   +---node_modules
?   ?   +---.bin
?   ?   +---.vite
?   ?   ?   +---deps
?   ?   +---.vite-temp
?   ?   +---@alloc
?   ?   ?   +---quick-lru
?   ?   +---@esbuild
?   ?   ?   +---win32-x64
?   ?   +---@isaacs
?   ?   ?   +---cliui
?   ?   ?       +---build
?   ?   ?           +---lib
?   ?   +---@jridgewell
?   ?   ?   +---gen-mapping
?   ?   ?   ?   +---dist
?   ?   ?   ?   ?   +---types
?   ?   ?   ?   +---src
?   ?   ?   ?   +---types
?   ?   ?   +---remapping
?   ?   ?   ?   +---dist
?   ?   ?   ?   +---src
?   ?   ?   ?   +---types
?   ?   ?   +---resolve-uri
?   ?   ?   ?   +---dist
?   ?   ?   ?       +---types
?   ?   ?   +---sourcemap-codec
?   ?   ?   ?   +---dist
?   ?   ?   ?   +---src
?   ?   ?   ?   +---types
?   ?   ?   +---trace-mapping
?   ?   ?       +---dist
?   ?   ?       +---src
?   ?   ?       +---types
?   ?   +---@nodelib
?   ?   ?   +---fs.scandir
?   ?   ?   ?   +---out
?   ?   ?   ?       +---adapters
?   ?   ?   ?       +---providers
?   ?   ?   ?       +---types
?   ?   ?   ?       +---utils
?   ?   ?   +---fs.stat
?   ?   ?   ?   +---out
?   ?   ?   ?       +---adapters
?   ?   ?   ?       +---providers
?   ?   ?   ?       +---types
?   ?   ?   +---fs.walk
?   ?   ?       +---out
?   ?   ?           +---providers
?   ?   ?           +---readers
?   ?   ?           +---types
?   ?   +---@pkgjs
?   ?   ?   +---parseargs
?   ?   ?       +---examples
?   ?   ?       +---internal
?   ?   +---@rollup
?   ?   ?   +---rollup-win32-x64-gnu
?   ?   ?   +---rollup-win32-x64-msvc
?   ?   +---@tailwindcss
?   ?   ?   +---forms
?   ?   ?   ?   +---.github
?   ?   ?   ?   ?   +---ISSUE_TEMPLATE
?   ?   ?   ?   ?   +---workflows
?   ?   ?   ?   +---scripts
?   ?   ?   ?   +---src
?   ?   ?   +---node
?   ?   ?   ?   +---dist
?   ?   ?   ?   +---node_modules
?   ?   ?   ?       +---tailwindcss
?   ?   ?   ?           +---dist
?   ?   ?   +---oxide
?   ?   ?   +---oxide-win32-x64-msvc
?   ?   ?   +---vite
?   ?   ?       +---dist
?   ?   ?       +---node_modules
?   ?   ?           +---tailwindcss
?   ?   ?               +---dist
?   ?   +---@types
?   ?   ?   +---estree
?   ?   +---@vue
?   ?   ?   +---reactivity
?   ?   ?   ?   +---dist
?   ?   ?   +---shared
?   ?   ?       +---dist
?   ?   +---alpinejs
?   ?   ?   +---builds
?   ?   ?   +---dist
?   ?   ?   +---src
?   ?   ?       +---directives
?   ?   ?       +---magics
?   ?   ?       +---utils
?   ?   +---ansi-regex
?   ?   +---ansi-styles
?   ?   +---any-promise
?   ?   ?   +---register
?   ?   +---anymatch
?   ?   +---arg
?   ?   +---asynckit
?   ?   ?   +---lib
?   ?   +---autoprefixer
?   ?   ?   +---bin
?   ?   ?   +---data
?   ?   ?   +---lib
?   ?   ?       +---hacks
?   ?   +---axios
?   ?   ?   +---dist
?   ?   ?   ?   +---browser
?   ?   ?   ?   +---esm
?   ?   ?   ?   +---node
?   ?   ?   +---lib
?   ?   ?       +---adapters
?   ?   ?       +---cancel
?   ?   ?       +---core
?   ?   ?       +---defaults
?   ?   ?       +---env
?   ?   ?       ?   +---classes
?   ?   ?       +---helpers
?   ?   ?       +---platform
?   ?   ?           +---browser
?   ?   ?           ?   +---classes
?   ?   ?           +---common
?   ?   ?           +---node
?   ?   ?               +---classes
?   ?   +---balanced-match
?   ?   ?   +---.github
?   ?   +---baseline-browser-mapping
?   ?   ?   +---dist
?   ?   +---binary-extensions
?   ?   +---brace-expansion
?   ?   ?   +---.github
?   ?   +---braces
?   ?   ?   +---lib
?   ?   +---browserslist
?   ?   +---call-bind-apply-helpers
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---camelcase-css
?   ?   +---caniuse-lite
?   ?   ?   +---data
?   ?   ?   ?   +---features
?   ?   ?   ?   +---regions
?   ?   ?   +---dist
?   ?   ?       +---lib
?   ?   ?       +---unpacker
?   ?   +---chalk
?   ?   ?   +---node_modules
?   ?   ?   ?   +---supports-color
?   ?   ?   +---source
?   ?   +---chokidar
?   ?   ?   +---lib
?   ?   ?   +---node_modules
?   ?   ?   ?   +---glob-parent
?   ?   ?   +---types
?   ?   +---cliui
?   ?   ?   +---build
?   ?   ?   ?   +---lib
?   ?   ?   +---node_modules
?   ?   ?       +---ansi-regex
?   ?   ?       +---emoji-regex
?   ?   ?       ?   +---es2015
?   ?   ?       +---string-width
?   ?   ?       +---strip-ansi
?   ?   ?       +---wrap-ansi
?   ?   +---color-convert
?   ?   +---color-name
?   ?   +---combined-stream
?   ?   ?   +---lib
?   ?   +---commander
?   ?   ?   +---typings
?   ?   +---concurrently
?   ?   ?   +---dist
?   ?   ?   ?   +---bin
?   ?   ?   ?   +---src
?   ?   ?   ?       +---command-parser
?   ?   ?   ?       +---flow-control
?   ?   ?   +---docs
?   ?   ?       +---cli
?   ?   +---cross-spawn
?   ?   ?   +---lib
?   ?   ?       +---util
?   ?   +---cssesc
?   ?   ?   +---bin
?   ?   ?   +---man
?   ?   +---delayed-stream
?   ?   ?   +---lib
?   ?   +---detect-libc
?   ?   ?   +---lib
?   ?   +---didyoumean
?   ?   +---dlv
?   ?   ?   +---dist
?   ?   +---dunder-proto
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---eastasianwidth
?   ?   +---electron-to-chromium
?   ?   +---emoji-regex
?   ?   ?   +---es2015
?   ?   +---enhanced-resolve
?   ?   ?   +---lib
?   ?   ?       +---util
?   ?   +---es-define-property
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---es-errors
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---es-object-atoms
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---es-set-tostringtag
?   ?   ?   +---test
?   ?   +---esbuild
?   ?   ?   +---bin
?   ?   ?   +---lib
?   ?   +---escalade
?   ?   ?   +---dist
?   ?   ?   +---sync
?   ?   +---fast-glob
?   ?   ?   +---node_modules
?   ?   ?   ?   +---glob-parent
?   ?   ?   +---out
?   ?   ?       +---managers
?   ?   ?       +---providers
?   ?   ?       ?   +---filters
?   ?   ?       ?   +---matchers
?   ?   ?       ?   +---transformers
?   ?   ?       +---readers
?   ?   ?       +---types
?   ?   ?       +---utils
?   ?   +---fastq
?   ?   ?   +---.github
?   ?   ?   ?   +---workflows
?   ?   ?   +---test
?   ?   +---fill-range
?   ?   +---follow-redirects
?   ?   +---foreground-child
?   ?   ?   +---dist
?   ?   ?       +---commonjs
?   ?   ?       +---esm
?   ?   +---form-data
?   ?   ?   +---lib
?   ?   +---fraction.js
?   ?   +---function-bind
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---get-caller-file
?   ?   +---get-intrinsic
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---get-proto
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---glob
?   ?   ?   +---dist
?   ?   ?       +---commonjs
?   ?   ?       +---esm
?   ?   +---glob-parent
?   ?   +---gopd
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---graceful-fs
?   ?   +---has-flag
?   ?   +---has-symbols
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   ?       +---shams
?   ?   +---has-tostringtag
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   ?       +---shams
?   ?   +---hasown
?   ?   ?   +---.github
?   ?   +---is-binary-path
?   ?   +---is-core-module
?   ?   ?   +---test
?   ?   +---is-extglob
?   ?   +---is-fullwidth-code-point
?   ?   +---is-glob
?   ?   +---is-number
?   ?   +---isexe
?   ?   ?   +---test
?   ?   +---jackspeak
?   ?   ?   +---dist
?   ?   ?       +---commonjs
?   ?   ?       +---esm
?   ?   +---jiti
?   ?   ?   +---dist
?   ?   ?   +---lib
?   ?   +---laravel-vite-plugin
?   ?   ?   +---bin
?   ?   ?   +---dist
?   ?   ?   +---inertia-helpers
?   ?   +---lightningcss
?   ?   ?   +---node
?   ?   +---lightningcss-win32-x64-msvc
?   ?   +---lilconfig
?   ?   ?   +---src
?   ?   +---lines-and-columns
?   ?   ?   +---build
?   ?   +---lru-cache
?   ?   ?   +---dist
?   ?   ?       +---commonjs
?   ?   ?       +---esm
?   ?   +---magic-string
?   ?   ?   +---dist
?   ?   +---math-intrinsics
?   ?   ?   +---.github
?   ?   ?   +---constants
?   ?   ?   +---test
?   ?   +---merge2
?   ?   +---micromatch
?   ?   +---mime-db
?   ?   +---mime-types
?   ?   +---mini-svg-data-uri
?   ?   +---minimatch
?   ?   ?   +---dist
?   ?   ?       +---commonjs
?   ?   ?       +---esm
?   ?   +---minipass
?   ?   ?   +---dist
?   ?   ?       +---commonjs
?   ?   ?       +---esm
?   ?   +---mz
?   ?   +---nanoid
?   ?   ?   +---async
?   ?   ?   +---bin
?   ?   ?   +---non-secure
?   ?   ?   +---url-alphabet
?   ?   +---node-releases
?   ?   ?   +---data
?   ?   ?       +---processed
?   ?   ?       +---release-schedule
?   ?   +---normalize-path
?   ?   +---normalize-range
?   ?   +---object-assign
?   ?   +---object-hash
?   ?   ?   +---dist
?   ?   +---package-json-from-dist
?   ?   ?   +---dist
?   ?   ?       +---commonjs
?   ?   ?       +---esm
?   ?   +---path-key
?   ?   +---path-parse
?   ?   +---path-scurry
?   ?   ?   +---dist
?   ?   ?       +---commonjs
?   ?   ?       +---esm
?   ?   +---picocolors
?   ?   +---picomatch
?   ?   ?   +---lib
?   ?   +---pify
?   ?   +---pirates
?   ?   ?   +---lib
?   ?   +---postcss
?   ?   ?   +---lib
?   ?   +---postcss-import
?   ?   ?   +---lib
?   ?   +---postcss-js
?   ?   +---postcss-load-config
?   ?   ?   +---src
?   ?   +---postcss-nested
?   ?   +---postcss-selector-parser
?   ?   ?   +---dist
?   ?   ?       +---selectors
?   ?   ?       +---util
?   ?   +---postcss-value-parser
?   ?   ?   +---lib
?   ?   +---proxy-from-env
?   ?   +---queue-microtask
?   ?   +---read-cache
?   ?   +---readdirp
?   ?   +---require-directory
?   ?   +---resolve
?   ?   ?   +---.github
?   ?   ?   +---bin
?   ?   ?   +---example
?   ?   ?   +---lib
?   ?   ?   +---test
?   ?   ?       +---dotdot
?   ?   ?       ?   +---abc
?   ?   ?       +---module_dir
?   ?   ?       ?   +---xmodules
?   ?   ?       ?   ?   +---aaa
?   ?   ?       ?   +---ymodules
?   ?   ?       ?   ?   +---aaa
?   ?   ?       ?   +---zmodules
?   ?   ?       ?       +---bbb
?   ?   ?       +---node_path
?   ?   ?       ?   +---x
?   ?   ?       ?   ?   +---aaa
?   ?   ?       ?   ?   +---ccc
?   ?   ?       ?   +---y
?   ?   ?       ?       +---bbb
?   ?   ?       ?       +---ccc
?   ?   ?       +---pathfilter
?   ?   ?       ?   +---deep_ref
?   ?   ?       +---precedence
?   ?   ?       ?   +---aaa
?   ?   ?       ?   +---bbb
?   ?   ?       +---resolver
?   ?   ?       ?   +---baz
?   ?   ?       ?   +---browser_field
?   ?   ?       ?   +---dot_main
?   ?   ?       ?   +---dot_slash_main
?   ?   ?       ?   +---false_main
?   ?   ?       ?   +---incorrect_main
?   ?   ?       ?   +---invalid_main
?   ?   ?       ?   +---multirepo
?   ?   ?       ?   ?   +---packages
?   ?   ?       ?   ?       +---package-a
?   ?   ?       ?   ?       +---package-b
?   ?   ?       ?   +---nested_symlinks
?   ?   ?       ?   ?   +---mylib
?   ?   ?       ?   +---other_path
?   ?   ?       ?   ?   +---lib
?   ?   ?       ?   +---quux
?   ?   ?       ?   ?   +---foo
?   ?   ?       ?   +---same_names
?   ?   ?       ?   ?   +---foo
?   ?   ?       ?   +---symlinked
?   ?   ?       ?   ?   +---package
?   ?   ?       ?   ?   +---_
?   ?   ?       ?   ?       +---node_modules
?   ?   ?       ?   ?       +---symlink_target
?   ?   ?       ?   +---without_basedir
?   ?   ?       +---shadowed_core
?   ?   ?           +---node_modules
?   ?   ?               +---util
?   ?   +---reusify
?   ?   ?   +---.github
?   ?   ?   ?   +---workflows
?   ?   ?   +---benchmarks
?   ?   +---rollup
?   ?   ?   +---dist
?   ?   ?       +---bin
?   ?   ?       +---es
?   ?   ?       ?   +---shared
?   ?   ?       +---shared
?   ?   +---run-parallel
?   ?   +---rxjs
?   ?   ?   +---ajax
?   ?   ?   +---dist
?   ?   ?   ?   +---bundles
?   ?   ?   ?   +---cjs
?   ?   ?   ?   ?   +---ajax
?   ?   ?   ?   ?   +---fetch
?   ?   ?   ?   ?   +---internal
?   ?   ?   ?   ?   ?   +---ajax
?   ?   ?   ?   ?   ?   +---observable
?   ?   ?   ?   ?   ?   ?   +---dom
?   ?   ?   ?   ?   ?   +---operators
?   ?   ?   ?   ?   ?   +---scheduled
?   ?   ?   ?   ?   ?   +---scheduler
?   ?   ?   ?   ?   ?   +---symbol
?   ?   ?   ?   ?   ?   +---testing
?   ?   ?   ?   ?   ?   +---util
?   ?   ?   ?   ?   +---operators
?   ?   ?   ?   ?   +---testing
?   ?   ?   ?   ?   +---webSocket
?   ?   ?   ?   +---esm
?   ?   ?   ?   ?   +---ajax
?   ?   ?   ?   ?   +---fetch
?   ?   ?   ?   ?   +---internal
?   ?   ?   ?   ?   ?   +---ajax
?   ?   ?   ?   ?   ?   +---observable
?   ?   ?   ?   ?   ?   ?   +---dom
?   ?   ?   ?   ?   ?   +---operators
?   ?   ?   ?   ?   ?   +---scheduled
?   ?   ?   ?   ?   ?   +---scheduler
?   ?   ?   ?   ?   ?   +---symbol
?   ?   ?   ?   ?   ?   +---testing
?   ?   ?   ?   ?   ?   +---util
?   ?   ?   ?   ?   +---operators
?   ?   ?   ?   ?   +---testing
?   ?   ?   ?   ?   +---webSocket
?   ?   ?   ?   +---esm5
?   ?   ?   ?   ?   +---ajax
?   ?   ?   ?   ?   +---fetch
?   ?   ?   ?   ?   +---internal
?   ?   ?   ?   ?   ?   +---ajax
?   ?   ?   ?   ?   ?   +---observable
?   ?   ?   ?   ?   ?   ?   +---dom
?   ?   ?   ?   ?   ?   +---operators
?   ?   ?   ?   ?   ?   +---scheduled
?   ?   ?   ?   ?   ?   +---scheduler
?   ?   ?   ?   ?   ?   +---symbol
?   ?   ?   ?   ?   ?   +---testing
?   ?   ?   ?   ?   ?   +---util
?   ?   ?   ?   ?   +---operators
?   ?   ?   ?   ?   +---testing
?   ?   ?   ?   ?   +---webSocket
?   ?   ?   ?   +---types
?   ?   ?   ?       +---ajax
?   ?   ?   ?       +---fetch
?   ?   ?   ?       +---internal
?   ?   ?   ?       ?   +---ajax
?   ?   ?   ?       ?   +---observable
?   ?   ?   ?       ?   ?   +---dom
?   ?   ?   ?       ?   +---operators
?   ?   ?   ?       ?   +---scheduled
?   ?   ?   ?       ?   +---scheduler
?   ?   ?   ?       ?   +---symbol
?   ?   ?   ?       ?   +---testing
?   ?   ?   ?       ?   +---util
?   ?   ?   ?       +---operators
?   ?   ?   ?       +---testing
?   ?   ?   ?       +---webSocket
?   ?   ?   +---fetch
?   ?   ?   +---operators
?   ?   ?   +---src
?   ?   ?   ?   +---ajax
?   ?   ?   ?   +---fetch
?   ?   ?   ?   +---internal
?   ?   ?   ?   ?   +---ajax
?   ?   ?   ?   ?   +---observable
?   ?   ?   ?   ?   ?   +---dom
?   ?   ?   ?   ?   +---operators
?   ?   ?   ?   ?   +---scheduled
?   ?   ?   ?   ?   +---scheduler
?   ?   ?   ?   ?   +---symbol
?   ?   ?   ?   ?   +---testing
?   ?   ?   ?   ?   +---util
?   ?   ?   ?   +---operators
?   ?   ?   ?   +---testing
?   ?   ?   ?   +---webSocket
?   ?   ?   +---testing
?   ?   ?   +---webSocket
?   ?   +---shebang-command
?   ?   +---shebang-regex
?   ?   +---shell-quote
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---signal-exit
?   ?   ?   +---dist
?   ?   ?       +---cjs
?   ?   ?       +---mjs
?   ?   +---source-map-js
?   ?   ?   +---lib
?   ?   +---string-width
?   ?   +---string-width-cjs
?   ?   ?   +---node_modules
?   ?   ?       +---ansi-regex
?   ?   ?       +---emoji-regex
?   ?   ?       ?   +---es2015
?   ?   ?       +---strip-ansi
?   ?   +---strip-ansi
?   ?   +---strip-ansi-cjs
?   ?   ?   +---node_modules
?   ?   ?       +---ansi-regex
?   ?   +---sucrase
?   ?   ?   +---bin
?   ?   ?   +---dist
?   ?   ?   ?   +---esm
?   ?   ?   ?   ?   +---parser
?   ?   ?   ?   ?   ?   +---plugins
?   ?   ?   ?   ?   ?   ?   +---jsx
?   ?   ?   ?   ?   ?   +---tokenizer
?   ?   ?   ?   ?   ?   +---traverser
?   ?   ?   ?   ?   ?   +---util
?   ?   ?   ?   ?   +---transformers
?   ?   ?   ?   ?   +---util
?   ?   ?   ?   +---parser
?   ?   ?   ?   ?   +---plugins
?   ?   ?   ?   ?   ?   +---jsx
?   ?   ?   ?   ?   +---tokenizer
?   ?   ?   ?   ?   +---traverser
?   ?   ?   ?   ?   +---util
?   ?   ?   ?   +---transformers
?   ?   ?   ?   +---types
?   ?   ?   ?   ?   +---parser
?   ?   ?   ?   ?   ?   +---plugins
?   ?   ?   ?   ?   ?   ?   +---jsx
?   ?   ?   ?   ?   ?   +---tokenizer
?   ?   ?   ?   ?   ?   +---traverser
?   ?   ?   ?   ?   ?   +---util
?   ?   ?   ?   ?   +---transformers
?   ?   ?   ?   ?   +---util
?   ?   ?   ?   +---util
?   ?   ?   +---register
?   ?   ?   +---ts-node-plugin
?   ?   +---supports-color
?   ?   +---supports-preserve-symlinks-flag
?   ?   ?   +---.github
?   ?   ?   +---test
?   ?   +---tailwindcss
?   ?   ?   +---lib
?   ?   ?   ?   +---cli
?   ?   ?   ?   ?   +---build
?   ?   ?   ?   ?   +---help
?   ?   ?   ?   ?   +---init
?   ?   ?   ?   +---css
?   ?   ?   ?   +---lib
?   ?   ?   ?   +---postcss-plugins
?   ?   ?   ?   ?   +---nesting
?   ?   ?   ?   +---public
?   ?   ?   ?   +---util
?   ?   ?   ?   +---value-parser
?   ?   ?   +---nesting
?   ?   ?   +---node_modules
?   ?   ?   ?   +---.bin
?   ?   ?   ?   +---jiti
?   ?   ?   ?       +---bin
?   ?   ?   ?       +---dist
?   ?   ?   ?       ?   +---plugins
?   ?   ?   ?       +---lib
?   ?   ?   +---peers
?   ?   ?   +---scripts
?   ?   ?   +---src
?   ?   ?   ?   +---cli
?   ?   ?   ?   ?   +---build
?   ?   ?   ?   ?   +---help
?   ?   ?   ?   ?   +---init
?   ?   ?   ?   +---css
?   ?   ?   ?   +---lib
?   ?   ?   ?   +---postcss-plugins
?   ?   ?   ?   ?   +---nesting
?   ?   ?   ?   +---public
?   ?   ?   ?   +---util
?   ?   ?   ?   +---value-parser
?   ?   ?   +---stubs
?   ?   ?   +---types
?   ?   ?       +---generated
?   ?   +---tapable
?   ?   ?   +---lib
?   ?   +---thenify
?   ?   +---thenify-all
?   ?   +---tinyglobby
?   ?   ?   +---dist
?   ?   ?   +---node_modules
?   ?   ?       +---fdir
?   ?   ?       ?   +---dist
?   ?   ?       +---picomatch
?   ?   ?           +---lib
?   ?   +---to-regex-range
?   ?   +---tree-kill
?   ?   +---ts-interface-checker
?   ?   ?   +---dist
?   ?   +---tslib
?   ?   ?   +---modules
?   ?   +---update-browserslist-db
?   ?   +---util-deprecate
?   ?   +---vite
?   ?   ?   +---bin
?   ?   ?   +---dist
?   ?   ?   ?   +---client
?   ?   ?   ?   +---node
?   ?   ?   ?       +---chunks
?   ?   ?   +---misc
?   ?   ?   +---node_modules
?   ?   ?   ?   +---fdir
?   ?   ?   ?   ?   +---dist
?   ?   ?   ?   +---picomatch
?   ?   ?   ?       +---lib
?   ?   ?   +---types
?   ?   ?       +---internal
?   ?   +---vite-plugin-full-reload
?   ?   ?   +---dist
?   ?   +---which
?   ?   ?   +---bin
?   ?   +---wrap-ansi
?   ?   ?   +---node_modules
?   ?   ?       +---ansi-styles
?   ?   +---wrap-ansi-cjs
?   ?   ?   +---node_modules
?   ?   ?       +---ansi-regex
?   ?   ?       +---emoji-regex
?   ?   ?       ?   +---es2015
?   ?   ?       +---string-width
?   ?   ?       +---strip-ansi
?   ?   +---y18n
?   ?   ?   +---build
?   ?   ?       +---lib
?   ?   ?           +---platform-shims
?   ?   +---yargs
?   ?   ?   +---build
?   ?   ?   ?   +---lib
?   ?   ?   ?       +---typings
?   ?   ?   ?       +---utils
?   ?   ?   +---helpers
?   ?   ?   +---lib
?   ?   ?   ?   +---platform-shims
?   ?   ?   +---locales
?   ?   ?   +---node_modules
?   ?   ?       +---ansi-regex
?   ?   ?       +---emoji-regex
?   ?   ?       ?   +---es2015
?   ?   ?       +---string-width
?   ?   ?       +---strip-ansi
?   ?   +---yargs-parser
?   ?       +---build
?   ?           +---lib
?   +---public
?   ?   +---build
?   ?       +---assets
?   +---resources
?   ?   +---css
?   ?   +---js
?   ?   +---views
?   ?       +---auth
?   ?       +---components
?   ?       +---layouts
?   ?       +---livewire
?   ?       ?   +---admin
?   ?       +---profile
?   ?           +---partials
?   +---routes
?   +---storage
?   ?   +---app
?   ?   ?   +---private
?   ?   ?   +---public
?   ?   +---framework
?   ?   ?   +---cache
?   ?   ?   ?   +---data
?   ?   ?   +---sessions
?   ?   ?   +---testing
?   ?   ?   +---views
?   ?   +---logs
?   +---tests
?   ?   +---Feature
?   ?   ?   +---Auth
?   ?   +---Unit
?   +---vendor
?       +---bin
?       +---brianium
?       ?   +---paratest
?       ?       +---bin
?       ?       +---src
?       ?           +---Coverage
?       ?           +---JUnit
?       ?           +---Util
?       ?           +---WrapperRunner
?       +---brick
?       ?   +---math
?       ?       +---src
?       ?           +---Exception
?       ?           +---Internal
?       ?               +---Calculator
?       +---carbonphp
?       ?   +---carbon-doctrine-types
?       ?       +---src
?       ?           +---Carbon
?       ?               +---Doctrine
?       +---composer
?       +---dflydev
?       ?   +---dot-access-data
?       ?       +---src
?       ?           +---Exception
?       +---doctrine
?       ?   +---deprecations
?       ?   ?   +---src
?       ?   ?       +---PHPUnit
?       ?   +---inflector
?       ?   ?   +---docs
?       ?   ?   ?   +---en
?       ?   ?   +---src
?       ?   ?       +---Rules
?       ?   ?           +---English
?       ?   ?           +---Esperanto
?       ?   ?           +---French
?       ?   ?           +---Italian
?       ?   ?           +---NorwegianBokmal
?       ?   ?           +---Portuguese
?       ?   ?           +---Spanish
?       ?   ?           +---Turkish
?       ?   +---lexer
?       ?       +---src
?       +---dragonmantank
?       ?   +---cron-expression
?       ?       +---src
?       ?           +---Cron
?       +---egulias
?       ?   +---email-validator
?       ?       +---src
?       ?           +---Parser
?       ?           ?   +---CommentStrategy
?       ?           +---Result
?       ?           ?   +---Reason
?       ?           +---Validation
?       ?           ?   +---Exception
?       ?           ?   +---Extra
?       ?           +---Warning
?       +---fakerphp
?       ?   +---faker
?       ?       +---src
?       ?           +---Faker
?       ?               +---Calculator
?       ?               +---Container
?       ?               +---Core
?       ?               +---Extension
?       ?               +---Guesser
?       ?               +---ORM
?       ?               ?   +---CakePHP
?       ?               ?   +---Doctrine
?       ?               ?   +---Mandango
?       ?               ?   +---Propel
?       ?               ?   +---Propel2
?       ?               ?   +---Spot
?       ?               +---Provider
?       ?                   +---ar_EG
?       ?                   +---ar_JO
?       ?                   +---ar_SA
?       ?                   +---at_AT
?       ?                   +---bg_BG
?       ?                   +---bn_BD
?       ?                   +---cs_CZ
?       ?                   +---da_DK
?       ?                   +---de_AT
?       ?                   +---de_CH
?       ?                   +---de_DE
?       ?                   +---el_CY
?       ?                   +---el_GR
?       ?                   +---en_AU
?       ?                   +---en_CA
?       ?                   +---en_GB
?       ?                   +---en_HK
?       ?                   +---en_IN
?       ?                   +---en_NG
?       ?                   +---en_NZ
?       ?                   +---en_PH
?       ?                   +---en_SG
?       ?                   +---en_UG
?       ?                   +---en_US
?       ?                   +---en_ZA
?       ?                   +---es_AR
?       ?                   +---es_ES
?       ?                   +---es_PE
?       ?                   +---es_VE
?       ?                   +---et_EE
?       ?                   +---fa_IR
?       ?                   +---fi_FI
?       ?                   +---fr_BE
?       ?                   +---fr_CA
?       ?                   +---fr_CH
?       ?                   +---fr_FR
?       ?                   +---he_IL
?       ?                   +---hr_HR
?       ?                   +---hu_HU
?       ?                   +---hy_AM
?       ?                   +---id_ID
?       ?                   +---is_IS
?       ?                   +---it_CH
?       ?                   +---it_IT
?       ?                   +---ja_JP
?       ?                   +---ka_GE
?       ?                   +---kk_KZ
?       ?                   +---ko_KR
?       ?                   +---lt_LT
?       ?                   +---lv_LV
?       ?                   +---me_ME
?       ?                   +---mn_MN
?       ?                   +---ms_MY
?       ?                   +---nb_NO
?       ?                   +---ne_NP
?       ?                   +---nl_BE
?       ?                   +---nl_NL
?       ?                   +---pl_PL
?       ?                   +---pt_BR
?       ?                   +---pt_PT
?       ?                   +---ro_MD
?       ?                   +---ro_RO
?       ?                   +---ru_RU
?       ?                   +---sk_SK
?       ?                   +---sl_SI
?       ?                   +---sr_Cyrl_RS
?       ?                   +---sr_Latn_RS
?       ?                   +---sr_RS
?       ?                   +---sv_SE
?       ?                   +---th_TH
?       ?                   +---tr_TR
?       ?                   +---uk_UA
?       ?                   +---vi_VN
?       ?                   +---zh_CN
?       ?                   +---zh_TW
?       +---fidry
?       ?   +---cpu-core-counter
?       ?       +---bin
?       ?       +---src
?       ?           +---Executor
?       ?           +---Finder
?       +---filp
?       ?   +---whoops
?       ?       +---src
?       ?           +---Whoops
?       ?               +---Exception
?       ?               +---Handler
?       ?               +---Inspector
?       ?               +---Resources
?       ?               ?   +---css
?       ?               ?   +---js
?       ?               ?   +---views
?       ?               +---Util
?       +---fruitcake
?       ?   +---php-cors
?       ?       +---src
?       ?           +---Exceptions
?       +---graham-campbell
?       ?   +---result-type
?       ?       +---src
?       +---guzzlehttp
?       ?   +---guzzle
?       ?   ?   +---src
?       ?   ?       +---Cookie
?       ?   ?       +---Exception
?       ?   ?       +---Handler
?       ?   +---promises
?       ?   ?   +---src
?       ?   +---psr7
?       ?   ?   +---src
?       ?   ?       +---Exception
?       ?   +---uri-template
?       ?       +---src
?       +---hamcrest
?       ?   +---hamcrest-php
?       ?       +---generator
?       ?       ?   +---parts
?       ?       +---hamcrest
?       ?           +---Hamcrest
?       ?               +---Arrays
?       ?               +---Collection
?       ?               +---Core
?       ?               +---Internal
?       ?               +---Number
?       ?               +---Text
?       ?               +---Type
?       ?               +---Xml
?       +---jean85
?       ?   +---pretty-package-versions
?       ?       +---src
?       ?           +---Exception
?       +---laravel
?       ?   +---breeze
?       ?   ?   +---src
?       ?   ?   ?   +---Console
?       ?   ?   +---stubs
?       ?   ?       +---api
?       ?   ?       ?   +---app
?       ?   ?       ?   ?   +---Http
?       ?   ?       ?   ?   ?   +---Controllers
?       ?   ?       ?   ?   ?   ?   +---Auth
?       ?   ?       ?   ?   ?   +---Middleware
?       ?   ?       ?   ?   ?   +---Requests
?       ?   ?       ?   ?   ?       +---Auth
?       ?   ?       ?   ?   +---Providers
?       ?   ?       ?   +---config
?       ?   ?       ?   +---pest-tests
?       ?   ?       ?   ?   +---Feature
?       ?   ?       ?   ?   ?   +---Auth
?       ?   ?       ?   ?   +---Unit
?       ?   ?       ?   +---routes
?       ?   ?       ?   +---tests
?       ?   ?       ?       +---Feature
?       ?   ?       ?           +---Auth
?       ?   ?       +---default
?       ?   ?       ?   +---app
?       ?   ?       ?   ?   +---Http
?       ?   ?       ?   ?   ?   +---Controllers
?       ?   ?       ?   ?   ?   ?   +---Auth
?       ?   ?       ?   ?   ?   +---Requests
?       ?   ?       ?   ?   ?       +---Auth
?       ?   ?       ?   ?   +---View
?       ?   ?       ?   ?       +---Components
?       ?   ?       ?   +---pest-tests
?       ?   ?       ?   ?   +---Feature
?       ?   ?       ?   ?   ?   +---Auth
?       ?   ?       ?   ?   +---Unit
?       ?   ?       ?   +---resources
?       ?   ?       ?   ?   +---css
?       ?   ?       ?   ?   +---js
?       ?   ?       ?   ?   +---views
?       ?   ?       ?   ?       +---auth
?       ?   ?       ?   ?       +---components
?       ?   ?       ?   ?       +---layouts
?       ?   ?       ?   ?       +---profile
?       ?   ?       ?   ?           +---partials
?       ?   ?       ?   +---routes
?       ?   ?       ?   +---tests
?       ?   ?       ?       +---Feature
?       ?   ?       ?           +---Auth
?       ?   ?       +---inertia-common
?       ?   ?       ?   +---app
?       ?   ?       ?   ?   +---Http
?       ?   ?       ?   ?   ?   +---Controllers
?       ?   ?       ?   ?   ?   ?   +---Auth
?       ?   ?       ?   ?   ?   +---Middleware
?       ?   ?       ?   ?   +---Providers
?       ?   ?       ?   +---pest-tests
?       ?   ?       ?   ?   +---Feature
?       ?   ?       ?   ?       +---Auth
?       ?   ?       ?   +---routes
?       ?   ?       ?   +---tests
?       ?   ?       ?       +---Feature
?       ?   ?       ?           +---Auth
?       ?   ?       +---inertia-react
?       ?   ?       ?   +---resources
?       ?   ?       ?       +---js
?       ?   ?       ?       ?   +---Components
?       ?   ?       ?       ?   +---Layouts
?       ?   ?       ?       ?   +---Pages
?       ?   ?       ?       ?       +---Auth
?       ?   ?       ?       ?       +---Profile
?       ?   ?       ?       ?           +---Partials
?       ?   ?       ?       +---views
?       ?   ?       +---inertia-react-ts
?       ?   ?       ?   +---resources
?       ?   ?       ?       +---js
?       ?   ?       ?           +---Components
?       ?   ?       ?           +---Layouts
?       ?   ?       ?           +---Pages
?       ?   ?       ?           ?   +---Auth
?       ?   ?       ?           ?   +---Profile
?       ?   ?       ?           ?       +---Partials
?       ?   ?       ?           +---types
?       ?   ?       +---inertia-vue
?       ?   ?       ?   +---resources
?       ?   ?       ?       +---js
?       ?   ?       ?       ?   +---Components
?       ?   ?       ?       ?   +---Layouts
?       ?   ?       ?       ?   +---Pages
?       ?   ?       ?       ?       +---Auth
?       ?   ?       ?       ?       +---Profile
?       ?   ?       ?       ?           +---Partials
?       ?   ?       ?       +---views
?       ?   ?       +---inertia-vue-ts
?       ?   ?       ?   +---resources
?       ?   ?       ?       +---js
?       ?   ?       ?           +---Components
?       ?   ?       ?           +---Layouts
?       ?   ?       ?           +---Pages
?       ?   ?       ?           ?   +---Auth
?       ?   ?       ?           ?   +---Profile
?       ?   ?       ?           ?       +---Partials
?       ?   ?       ?           +---types
?       ?   ?       +---livewire
?       ?   ?       ?   +---resources
?       ?   ?       ?       +---views
?       ?   ?       ?           +---livewire
?       ?   ?       ?               +---layout
?       ?   ?       ?               +---pages
?       ?   ?       ?               ?   +---auth
?       ?   ?       ?               +---profile
?       ?   ?       ?               +---welcome
?       ?   ?       +---livewire-common
?       ?   ?       ?   +---app
?       ?   ?       ?   ?   +---Livewire
?       ?   ?       ?   ?       +---Actions
?       ?   ?       ?   ?       +---Forms
?       ?   ?       ?   +---pest-tests
?       ?   ?       ?   ?   +---Feature
?       ?   ?       ?   ?   ?   +---Auth
?       ?   ?       ?   ?   +---Unit
?       ?   ?       ?   +---resources
?       ?   ?       ?   ?   +---views
?       ?   ?       ?   ?       +---components
?       ?   ?       ?   ?       +---layouts
?       ?   ?       ?   +---routes
?       ?   ?       ?   +---tests
?       ?   ?       ?       +---Feature
?       ?   ?       ?           +---Auth
?       ?   ?       +---livewire-functional
?       ?   ?           +---resources
?       ?   ?               +---views
?       ?   ?                   +---livewire
?       ?   ?                       +---layout
?       ?   ?                       +---pages
?       ?   ?                       ?   +---auth
?       ?   ?                       +---profile
?       ?   ?                       +---welcome
?       ?   +---framework
?       ?   ?   +---config
?       ?   ?   +---config-stubs
?       ?   ?   +---src
?       ?   ?       +---Illuminate
?       ?   ?           +---Auth
?       ?   ?           ?   +---Access
?       ?   ?           ?   ?   +---Events
?       ?   ?           ?   +---Console
?       ?   ?           ?   ?   +---stubs
?       ?   ?           ?   ?       +---make
?       ?   ?           ?   ?           +---views
?       ?   ?           ?   ?               +---layouts
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---Listeners
?       ?   ?           ?   +---Middleware
?       ?   ?           ?   +---Notifications
?       ?   ?           ?   +---Passwords
?       ?   ?           +---Broadcasting
?       ?   ?           ?   +---Broadcasters
?       ?   ?           +---Bus
?       ?   ?           ?   +---Events
?       ?   ?           +---Cache
?       ?   ?           ?   +---Console
?       ?   ?           ?   ?   +---stubs
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---RateLimiting
?       ?   ?           +---Collections
?       ?   ?           ?   +---Traits
?       ?   ?           +---Concurrency
?       ?   ?           ?   +---Console
?       ?   ?           +---Conditionable
?       ?   ?           ?   +---Traits
?       ?   ?           +---Config
?       ?   ?           +---Console
?       ?   ?           ?   +---Concerns
?       ?   ?           ?   +---Contracts
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---resources
?       ?   ?           ?   ?   +---views
?       ?   ?           ?   ?       +---components
?       ?   ?           ?   +---Scheduling
?       ?   ?           ?   +---View
?       ?   ?           ?       +---Components
?       ?   ?           ?           +---Mutators
?       ?   ?           +---Container
?       ?   ?           ?   +---Attributes
?       ?   ?           +---Contracts
?       ?   ?           ?   +---Auth
?       ?   ?           ?   ?   +---Access
?       ?   ?           ?   ?   +---Middleware
?       ?   ?           ?   +---Broadcasting
?       ?   ?           ?   +---Bus
?       ?   ?           ?   +---Cache
?       ?   ?           ?   +---Concurrency
?       ?   ?           ?   +---Config
?       ?   ?           ?   +---Console
?       ?   ?           ?   +---Container
?       ?   ?           ?   +---Cookie
?       ?   ?           ?   +---Database
?       ?   ?           ?   ?   +---Eloquent
?       ?   ?           ?   ?   +---Events
?       ?   ?           ?   ?   +---Query
?       ?   ?           ?   +---Debug
?       ?   ?           ?   +---Encryption
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---Filesystem
?       ?   ?           ?   +---Foundation
?       ?   ?           ?   +---Hashing
?       ?   ?           ?   +---Http
?       ?   ?           ?   +---Log
?       ?   ?           ?   +---Mail
?       ?   ?           ?   +---Notifications
?       ?   ?           ?   +---Pagination
?       ?   ?           ?   +---Pipeline
?       ?   ?           ?   +---Process
?       ?   ?           ?   +---Queue
?       ?   ?           ?   +---Redis
?       ?   ?           ?   +---Routing
?       ?   ?           ?   +---Session
?       ?   ?           ?   ?   +---Middleware
?       ?   ?           ?   +---Support
?       ?   ?           ?   +---Translation
?       ?   ?           ?   +---Validation
?       ?   ?           ?   +---View
?       ?   ?           +---Cookie
?       ?   ?           ?   +---Middleware
?       ?   ?           +---Database
?       ?   ?           ?   +---Capsule
?       ?   ?           ?   +---Concerns
?       ?   ?           ?   +---Connectors
?       ?   ?           ?   +---Console
?       ?   ?           ?   ?   +---Factories
?       ?   ?           ?   ?   ?   +---stubs
?       ?   ?           ?   ?   +---Migrations
?       ?   ?           ?   ?   +---Seeds
?       ?   ?           ?   ?       +---stubs
?       ?   ?           ?   +---Eloquent
?       ?   ?           ?   ?   +---Attributes
?       ?   ?           ?   ?   +---Casts
?       ?   ?           ?   ?   +---Concerns
?       ?   ?           ?   ?   +---Factories
?       ?   ?           ?   ?   +---Relations
?       ?   ?           ?   ?       +---Concerns
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---Migrations
?       ?   ?           ?   ?   +---stubs
?       ?   ?           ?   +---Query
?       ?   ?           ?   ?   +---Grammars
?       ?   ?           ?   ?   +---Processors
?       ?   ?           ?   +---Schema
?       ?   ?           ?       +---Grammars
?       ?   ?           +---Encryption
?       ?   ?           +---Events
?       ?   ?           +---Filesystem
?       ?   ?           +---Foundation
?       ?   ?           ?   +---Auth
?       ?   ?           ?   ?   +---Access
?       ?   ?           ?   +---Bootstrap
?       ?   ?           ?   +---Bus
?       ?   ?           ?   +---Concerns
?       ?   ?           ?   +---Configuration
?       ?   ?           ?   +---Console
?       ?   ?           ?   ?   +---stubs
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---Exceptions
?       ?   ?           ?   ?   +---Renderer
?       ?   ?           ?   ?   ?   +---Mappers
?       ?   ?           ?   ?   +---views
?       ?   ?           ?   ?   +---Whoops
?       ?   ?           ?   +---Http
?       ?   ?           ?   ?   +---Events
?       ?   ?           ?   ?   +---Middleware
?       ?   ?           ?   ?       +---Concerns
?       ?   ?           ?   +---Providers
?       ?   ?           ?   +---Queue
?       ?   ?           ?   +---resources
?       ?   ?           ?   ?   +---exceptions
?       ?   ?           ?   ?       +---renderer
?       ?   ?           ?   ?           +---components
?       ?   ?           ?   ?           ?   +---icons
?       ?   ?           ?   ?           +---dist
?       ?   ?           ?   +---Routing
?       ?   ?           ?   +---stubs
?       ?   ?           ?   +---Support
?       ?   ?           ?   ?   +---Providers
?       ?   ?           ?   +---Testing
?       ?   ?           ?   ?   +---Concerns
?       ?   ?           ?   ?   +---Traits
?       ?   ?           ?   +---Validation
?       ?   ?           +---Hashing
?       ?   ?           +---Http
?       ?   ?           ?   +---Client
?       ?   ?           ?   ?   +---Concerns
?       ?   ?           ?   ?   +---Events
?       ?   ?           ?   +---Concerns
?       ?   ?           ?   +---Exceptions
?       ?   ?           ?   +---Middleware
?       ?   ?           ?   +---Resources
?       ?   ?           ?   ?   +---Json
?       ?   ?           ?   +---Testing
?       ?   ?           +---JsonSchema
?       ?   ?           ?   +---Types
?       ?   ?           +---Log
?       ?   ?           ?   +---Context
?       ?   ?           ?   ?   +---Events
?       ?   ?           ?   +---Events
?       ?   ?           +---Macroable
?       ?   ?           ?   +---Traits
?       ?   ?           +---Mail
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---Mailables
?       ?   ?           ?   +---resources
?       ?   ?           ?   ?   +---views
?       ?   ?           ?   ?       +---html
?       ?   ?           ?   ?       ?   +---themes
?       ?   ?           ?   ?       +---text
?       ?   ?           ?   +---Transport
?       ?   ?           +---Notifications
?       ?   ?           ?   +---Channels
?       ?   ?           ?   +---Console
?       ?   ?           ?   ?   +---stubs
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---Messages
?       ?   ?           ?   +---resources
?       ?   ?           ?       +---views
?       ?   ?           +---Pagination
?       ?   ?           ?   +---resources
?       ?   ?           ?       +---views
?       ?   ?           +---Pipeline
?       ?   ?           +---Process
?       ?   ?           ?   +---Exceptions
?       ?   ?           +---Queue
?       ?   ?           ?   +---Attributes
?       ?   ?           ?   +---Capsule
?       ?   ?           ?   +---Connectors
?       ?   ?           ?   +---Console
?       ?   ?           ?   ?   +---stubs
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---Failed
?       ?   ?           ?   +---Jobs
?       ?   ?           ?   +---Middleware
?       ?   ?           +---Redis
?       ?   ?           ?   +---Connections
?       ?   ?           ?   +---Connectors
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---Limiters
?       ?   ?           +---Routing
?       ?   ?           ?   +---Console
?       ?   ?           ?   ?   +---stubs
?       ?   ?           ?   +---Contracts
?       ?   ?           ?   +---Controllers
?       ?   ?           ?   +---Events
?       ?   ?           ?   +---Exceptions
?       ?   ?           ?   +---Matching
?       ?   ?           ?   +---Middleware
?       ?   ?           +---Session
?       ?   ?           ?   +---Console
?       ?   ?           ?   ?   +---stubs
?       ?   ?           ?   +---Middleware
?       ?   ?           +---Support
?       ?   ?           ?   +---Defer
?       ?   ?           ?   +---Exceptions
?       ?   ?           ?   +---Facades
?       ?   ?           ?   +---Testing
?       ?   ?           ?   ?   +---Fakes
?       ?   ?           ?   +---Traits
?       ?   ?           +---Testing
?       ?   ?           ?   +---Concerns
?       ?   ?           ?   +---Constraints
?       ?   ?           ?   +---Exceptions
?       ?   ?           ?   +---Fluent
?       ?   ?           ?       +---Concerns
?       ?   ?           +---Translation
?       ?   ?           ?   +---lang
?       ?   ?           ?       +---en
?       ?   ?           +---Validation
?       ?   ?           ?   +---Concerns
?       ?   ?           ?   +---Rules
?       ?   ?           +---View
?       ?   ?               +---Compilers
?       ?   ?               ?   +---Concerns
?       ?   ?               +---Concerns
?       ?   ?               +---Engines
?       ?   ?               +---Middleware
?       ?   +---pail
?       ?   ?   +---src
?       ?   ?       +---Console
?       ?   ?       ?   +---Commands
?       ?   ?       +---Contracts
?       ?   ?       +---Guards
?       ?   ?       +---Printers
?       ?   ?       +---ValueObjects
?       ?   ?           +---Origin
?       ?   +---pint
?       ?   ?   +---builds
?       ?   ?   +---overrides
?       ?   ?       +---Runner
?       ?   ?           +---Parallel
?       ?   +---prompts
?       ?   ?   +---src
?       ?   ?       +---Concerns
?       ?   ?       +---Exceptions
?       ?   ?       +---Output
?       ?   ?       +---Support
?       ?   ?       +---Themes
?       ?   ?           +---Contracts
?       ?   ?           +---Default
?       ?   ?               +---Concerns
?       ?   +---sail
?       ?   ?   +---bin
?       ?   ?   +---database
?       ?   ?   ?   +---mariadb
?       ?   ?   ?   +---mysql
?       ?   ?   ?   +---pgsql
?       ?   ?   +---runtimes
?       ?   ?   ?   +---8.0
?       ?   ?   ?   +---8.1
?       ?   ?   ?   +---8.2
?       ?   ?   ?   +---8.3
?       ?   ?   ?   +---8.4
?       ?   ?   +---src
?       ?   ?   ?   +---Console
?       ?   ?   ?       +---Concerns
?       ?   ?   +---stubs
?       ?   +---serializable-closure
?       ?   ?   +---src
?       ?   ?       +---Contracts
?       ?   ?       +---Exceptions
?       ?   ?       +---Serializers
?       ?   ?       +---Signers
?       ?   ?       +---Support
?       ?   +---tinker
?       ?       +---config
?       ?       +---src
?       ?           +---Console
?       +---league
?       ?   +---commonmark
?       ?   ?   +---src
?       ?   ?       +---Delimiter
?       ?   ?       ?   +---Processor
?       ?   ?       +---Environment
?       ?   ?       +---Event
?       ?   ?       +---Exception
?       ?   ?       +---Extension
?       ?   ?       ?   +---Attributes
?       ?   ?       ?   ?   +---Event
?       ?   ?       ?   ?   +---Node
?       ?   ?       ?   ?   +---Parser
?       ?   ?       ?   ?   +---Util
?       ?   ?       ?   +---Autolink
?       ?   ?       ?   +---CommonMark
?       ?   ?       ?   ?   +---Delimiter
?       ?   ?       ?   ?   ?   +---Processor
?       ?   ?       ?   ?   +---Node
?       ?   ?       ?   ?   ?   +---Block
?       ?   ?       ?   ?   ?   +---Inline
?       ?   ?       ?   ?   +---Parser
?       ?   ?       ?   ?   ?   +---Block
?       ?   ?       ?   ?   ?   +---Inline
?       ?   ?       ?   ?   +---Renderer
?       ?   ?       ?   ?       +---Block
?       ?   ?       ?   ?       +---Inline
?       ?   ?       ?   +---DefaultAttributes
?       ?   ?       ?   +---DescriptionList
?       ?   ?       ?   ?   +---Event
?       ?   ?       ?   ?   +---Node
?       ?   ?       ?   ?   +---Parser
?       ?   ?       ?   ?   +---Renderer
?       ?   ?       ?   +---DisallowedRawHtml
?       ?   ?       ?   +---Embed
?       ?   ?       ?   ?   +---Bridge
?       ?   ?       ?   +---ExternalLink
?       ?   ?       ?   +---Footnote
?       ?   ?       ?   ?   +---Event
?       ?   ?       ?   ?   +---Node
?       ?   ?       ?   ?   +---Parser
?       ?   ?       ?   ?   +---Renderer
?       ?   ?       ?   +---FrontMatter
?       ?   ?       ?   ?   +---Data
?       ?   ?       ?   ?   +---Exception
?       ?   ?       ?   ?   +---Input
?       ?   ?       ?   ?   +---Listener
?       ?   ?       ?   ?   +---Output
?       ?   ?       ?   +---HeadingPermalink
?       ?   ?       ?   +---InlinesOnly
?       ?   ?       ?   +---Mention
?       ?   ?       ?   ?   +---Generator
?       ?   ?       ?   +---SmartPunct
?       ?   ?       ?   +---Strikethrough
?       ?   ?       ?   +---Table
?       ?   ?       ?   +---TableOfContents
?       ?   ?       ?   ?   +---Node
?       ?   ?       ?   ?   +---Normalizer
?       ?   ?       ?   +---TaskList
?       ?   ?       +---Input
?       ?   ?       +---Node
?       ?   ?       ?   +---Block
?       ?   ?       ?   +---Inline
?       ?   ?       ?   +---Query
?       ?   ?       +---Normalizer
?       ?   ?       +---Output
?       ?   ?       +---Parser
?       ?   ?       ?   +---Block
?       ?   ?       ?   +---Inline
?       ?   ?       +---Reference
?       ?   ?       +---Renderer
?       ?   ?       ?   +---Block
?       ?   ?       ?   +---Inline
?       ?   ?       +---Util
?       ?   ?       +---Xml
?       ?   +---config
?       ?   ?   +---src
?       ?   ?       +---Exception
?       ?   +---flysystem
?       ?   ?   +---src
?       ?   ?       +---UnixVisibility
?       ?   ?       +---UrlGeneration
?       ?   +---flysystem-local
?       ?   +---mime-type-detection
?       ?   ?   +---src
?       ?   +---uri
?       ?   ?   +---UriTemplate
?       ?   +---uri-interfaces
?       ?       +---Contracts
?       ?       +---Exceptions
?       ?       +---Idna
?       ?       +---IPv4
?       ?       +---IPv6
?       ?       +---KeyValuePair
?       +---livewire
?       ?   +---livewire
?       ?       +---config
?       ?       +---dist
?       ?       +---src
?       ?           +---Attributes
?       ?           +---Concerns
?       ?           +---Drawer
?       ?           +---Exceptions
?       ?           +---Features
?       ?           ?   +---SupportAccessingParent
?       ?           ?   +---SupportAttributes
?       ?           ?   +---SupportAutoInjectedAssets
?       ?           ?   +---SupportBladeAttributes
?       ?           ?   +---SupportChecksumErrorDebugging
?       ?           ?   +---SupportComputed
?       ?           ?   +---SupportConsoleCommands
?       ?           ?   ?   +---Commands
?       ?           ?   ?       +---Upgrade
?       ?           ?   +---SupportDataBinding
?       ?           ?   +---SupportDisablingBackButtonCache
?       ?           ?   +---SupportEntangle
?       ?           ?   +---SupportErrorResponses
?       ?           ?   +---SupportEvents
?       ?           ?   +---SupportFileDownloads
?       ?           ?   +---SupportFileUploads
?       ?           ?   +---SupportFormObjects
?       ?           ?   +---SupportIsolating
?       ?           ?   +---SupportJsEvaluation
?       ?           ?   +---SupportLazyLoading
?       ?           ?   +---SupportLegacyModels
?       ?           ?   +---SupportLifecycleHooks
?       ?           ?   +---SupportLocales
?       ?           ?   +---SupportLockedProperties
?       ?           ?   +---SupportModels
?       ?           ?   +---SupportMorphAwareIfStatement
?       ?           ?   +---SupportMultipleRootElementDetection
?       ?           ?   +---SupportNavigate
?       ?           ?   ?   +---test-views
?       ?           ?   +---SupportNestedComponentListeners
?       ?           ?   +---SupportNestingComponents
?       ?           ?   +---SupportPageComponents
?       ?           ?   +---SupportPagination
?       ?           ?   ?   +---views
?       ?           ?   +---SupportPolling
?       ?           ?   +---SupportQueryString
?       ?           ?   +---SupportReactiveProps
?       ?           ?   +---SupportRedirects
?       ?           ?   +---SupportScriptsAndAssets
?       ?           ?   +---SupportSession
?       ?           ?   +---SupportStdClasses
?       ?           ?   +---SupportStreaming
?       ?           ?   +---SupportTeleporting
?       ?           ?   +---SupportTesting
?       ?           ?   +---SupportTransitions
?       ?           ?   +---SupportValidation
?       ?           ?   +---SupportWireables
?       ?           ?   +---SupportWireConfirm
?       ?           ?   +---SupportWireCurrent
?       ?           ?   ?   +---test-views
?       ?           ?   +---SupportWireIgnore
?       ?           ?   +---SupportWireLoading
?       ?           ?   +---SupportWireModelingNestedComponents
?       ?           ?   +---SupportWireShow
?       ?           ?   +---SupportWireText
?       ?           +---Mechanisms
?       ?               +---CompileLivewireTags
?       ?               +---ExtendBlade
?       ?               +---FrontendAssets
?       ?               +---HandleComponents
?       ?               ?   +---Synthesizers
?       ?               +---HandleRequests
?       ?               +---PersistentMiddleware
?       +---mockery
?       ?   +---mockery
?       ?       +---docs
?       ?       ?   +---cookbook
?       ?       ?   +---getting_started
?       ?       ?   +---mockery
?       ?       ?   +---reference
?       ?       ?   +---_static
?       ?       +---library
?       ?           +---Mockery
?       ?               +---Adapter
?       ?               ?   +---Phpunit
?       ?               +---CountValidator
?       ?               +---Exception
?       ?               +---Generator
?       ?               ?   +---StringManipulation
?       ?               ?       +---Pass
?       ?               +---Loader
?       ?               +---Matcher
?       +---monolog
?       ?   +---monolog
?       ?       +---src
?       ?           +---Monolog
?       ?               +---Attribute
?       ?               +---Formatter
?       ?               +---Handler
?       ?               ?   +---Curl
?       ?               ?   +---FingersCrossed
?       ?               ?   +---Slack
?       ?               ?   +---SyslogUdp
?       ?               +---Processor
?       ?               +---Test
?       +---myclabs
?       ?   +---deep-copy
?       ?       +---src
?       ?           +---DeepCopy
?       ?               +---Exception
?       ?               +---Filter
?       ?               ?   +---Doctrine
?       ?               +---Matcher
?       ?               ?   +---Doctrine
?       ?               +---Reflection
?       ?               +---TypeFilter
?       ?               ?   +---Date
?       ?               ?   +---Spl
?       ?               +---TypeMatcher
?       +---nesbot
?       ?   +---carbon
?       ?       +---bin
?       ?       +---lazy
?       ?       ?   +---Carbon
?       ?       ?       +---MessageFormatter
?       ?       +---src
?       ?           +---Carbon
?       ?               +---Cli
?       ?               +---Exceptions
?       ?               +---Lang
?       ?               +---Laravel
?       ?               +---List
?       ?               +---MessageFormatter
?       ?               +---PHPStan
?       ?               +---Traits
?       +---nette
?       ?   +---schema
?       ?   ?   +---src
?       ?   ?       +---Schema
?       ?   ?           +---Elements
?       ?   +---utils
?       ?       +---src
?       ?           +---Iterators
?       ?           +---Utils
?       +---nikic
?       ?   +---php-parser
?       ?       +---bin
?       ?       +---lib
?       ?           +---PhpParser
?       ?               +---Builder
?       ?               +---Comment
?       ?               +---ErrorHandler
?       ?               +---Internal
?       ?               +---Lexer
?       ?               ?   +---TokenEmulator
?       ?               +---Node
?       ?               ?   +---Expr
?       ?               ?   ?   +---AssignOp
?       ?               ?   ?   +---BinaryOp
?       ?               ?   ?   +---Cast
?       ?               ?   +---Name
?       ?               ?   +---Scalar
?       ?               ?   ?   +---MagicConst
?       ?               ?   +---Stmt
?       ?               ?       +---TraitUseAdaptation
?       ?               +---NodeVisitor
?       ?               +---Parser
?       ?               +---PrettyPrinter
?       +---nunomaduro
?       ?   +---collision
?       ?   ?   +---.temp
?       ?   ?   +---src
?       ?   ?       +---Adapters
?       ?   ?       ?   +---Laravel
?       ?   ?       ?   ?   +---Commands
?       ?   ?       ?   ?   +---Exceptions
?       ?   ?       ?   +---Phpunit
?       ?   ?       ?       +---Printers
?       ?   ?       ?       +---Subscribers
?       ?   ?       ?       +---Support
?       ?   ?       +---Contracts
?       ?   ?       ?   +---Adapters
?       ?   ?       ?       +---Phpunit
?       ?   ?       +---Exceptions
?       ?   ?       +---SolutionsRepositories
?       ?   +---termwind
?       ?       +---src
?       ?           +---Actions
?       ?           +---Components
?       ?           +---Enums
?       ?           +---Exceptions
?       ?           +---Helpers
?       ?           +---Html
?       ?           +---Laravel
?       ?           +---Repositories
?       ?           +---ValueObjects
?       +---pestphp
?       ?   +---pest
?       ?   ?   +---.temp
?       ?   ?   +---bin
?       ?   ?   +---overrides
?       ?   ?   ?   +---Event
?       ?   ?   ?   ?   +---Value
?       ?   ?   ?   +---Logging
?       ?   ?   ?   ?   +---JUnit
?       ?   ?   ?   +---Runner
?       ?   ?   ?   ?   +---Filter
?       ?   ?   ?   ?   +---ResultCache
?       ?   ?   ?   +---TextUI
?       ?   ?   ?       +---Command
?       ?   ?   ?       ?   +---Commands
?       ?   ?   ?       +---Output
?       ?   ?   ?           +---Default
?       ?   ?   ?               +---ProgressPrinter
?       ?   ?   ?                   +---Subscriber
?       ?   ?   +---resources
?       ?   ?   ?   +---views
?       ?   ?   ?       +---components
?       ?   ?   +---src
?       ?   ?   ?   +---ArchPresets
?       ?   ?   ?   +---Bootstrappers
?       ?   ?   ?   +---Collision
?       ?   ?   ?   +---Concerns
?       ?   ?   ?   ?   +---Logging
?       ?   ?   ?   +---Configuration
?       ?   ?   ?   +---Console
?       ?   ?   ?   +---Contracts
?       ?   ?   ?   ?   +---Plugins
?       ?   ?   ?   +---Evaluators
?       ?   ?   ?   +---Exceptions
?       ?   ?   ?   +---Expectations
?       ?   ?   ?   +---Factories
?       ?   ?   ?   ?   +---Concerns
?       ?   ?   ?   ?   +---Covers
?       ?   ?   ?   +---Logging
?       ?   ?   ?   ?   +---TeamCity
?       ?   ?   ?   ?       +---Subscriber
?       ?   ?   ?   +---Matchers
?       ?   ?   ?   +---Mixins
?       ?   ?   ?   +---PendingCalls
?       ?   ?   ?   ?   +---Concerns
?       ?   ?   ?   +---Plugins
?       ?   ?   ?   ?   +---Actions
?       ?   ?   ?   ?   +---Concerns
?       ?   ?   ?   ?   +---Parallel
?       ?   ?   ?   ?       +---Contracts
?       ?   ?   ?   ?       +---Handlers
?       ?   ?   ?   ?       +---Paratest
?       ?   ?   ?   ?       +---Support
?       ?   ?   ?   +---Repositories
?       ?   ?   ?   +---Subscribers
?       ?   ?   ?   +---Support
?       ?   ?   ?   +---TestCaseFilters
?       ?   ?   ?   +---TestCaseMethodFilters
?       ?   ?   ?   +---TestCases
?       ?   ?   +---stubs
?       ?   ?       +---init
?       ?   ?       ?   +---Feature
?       ?   ?       ?   +---Unit
?       ?   ?       +---init-laravel
?       ?   ?           +---Feature
?       ?   ?           +---Unit
?       ?   +---pest-plugin
?       ?   ?   +---.temp
?       ?   ?   +---src
?       ?   ?       +---Commands
?       ?   +---pest-plugin-arch
?       ?   ?   +---src
?       ?   ?       +---Collections
?       ?   ?       +---Concerns
?       ?   ?       +---Contracts
?       ?   ?       +---Exceptions
?       ?   ?       +---Expectations
?       ?   ?       +---Factories
?       ?   ?       +---Objects
?       ?   ?       +---Options
?       ?   ?       +---Repositories
?       ?   ?       +---Support
?       ?   ?       +---ValueObjects
?       ?   +---pest-plugin-laravel
?       ?   ?   +---resources
?       ?   ?   ?   +---database
?       ?   ?   ?   ?   +---migrations
?       ?   ?   ?   +---views
?       ?   ?   +---src
?       ?   ?   ?   +---Commands
?       ?   ?   +---stubs
?       ?   ?       +---Laravel
?       ?   +---pest-plugin-mutate
?       ?       +---.temp
?       ?       ?   +---cache
?       ?       ?   +---mutations
?       ?       ?   +---pest-mutate-cache
?       ?       +---src
?       ?           +---Boostrappers
?       ?           +---Cache
?       ?           +---Contracts
?       ?           +---Event
?       ?           ?   +---Events
?       ?           ?       +---Test
?       ?           ?       ?   +---HookMethod
?       ?           ?       ?   +---Outcome
?       ?           ?       +---TestSuite
?       ?           +---Exceptions
?       ?           +---Factories
?       ?           +---Mutators
?       ?           ?   +---Abstract
?       ?           ?   +---Arithmetic
?       ?           ?   +---Array
?       ?           ?   +---Assignment
?       ?           ?   +---Casting
?       ?           ?   +---Concerns
?       ?           ?   +---ControlStructures
?       ?           ?   +---Equality
?       ?           ?   +---Laravel
?       ?           ?   ?   +---Remove
?       ?           ?   ?   +---Unwrap
?       ?           ?   +---Logical
?       ?           ?   +---Math
?       ?           ?   +---Number
?       ?           ?   +---Removal
?       ?           ?   +---Return
?       ?           ?   +---Sets
?       ?           ?   +---String
?       ?           ?   +---Visibility
?       ?           +---Options
?       ?           +---Plugins
?       ?           +---Repositories
?       ?           +---Subscribers
?       ?           +---Support
?       ?           ?   +---Configuration
?       ?           ?   +---Printers
?       ?           +---Tester
?       +---phar-io
?       ?   +---manifest
?       ?   ?   +---.github
?       ?   ?   ?   +---workflows
?       ?   ?   +---src
?       ?   ?   ?   +---exceptions
?       ?   ?   ?   +---values
?       ?   ?   ?   +---xml
?       ?   ?   +---tools
?       ?   ?       +---php-cs-fixer.d
?       ?   +---version
?       ?       +---src
?       ?           +---constraints
?       ?           +---exceptions
?       +---phpdocumentor
?       ?   +---reflection-common
?       ?   ?   +---.github
?       ?   ?   ?   +---workflows
?       ?   ?   +---src
?       ?   +---reflection-docblock
?       ?   ?   +---src
?       ?   ?       +---DocBlock
?       ?   ?       ?   +---Tags
?       ?   ?       ?       +---Factory
?       ?   ?       ?       +---Formatter
?       ?   ?       ?       +---Reference
?       ?   ?       +---Exception
?       ?   +---type-resolver
?       ?       +---.phpdoc
?       ?       ?   +---template
?       ?       +---docs
?       ?       +---src
?       ?           +---PseudoTypes
?       ?           +---Types
?       +---phpoption
?       ?   +---phpoption
?       ?       +---src
?       ?           +---PhpOption
?       +---phpstan
?       ?   +---phpdoc-parser
?       ?       +---src
?       ?           +---Ast
?       ?           ?   +---ConstExpr
?       ?           ?   +---NodeVisitor
?       ?           ?   +---PhpDoc
?       ?           ?   ?   +---Doctrine
?       ?           ?   +---Type
?       ?           +---Lexer
?       ?           +---Parser
?       ?           +---Printer
?       +---phpunit
?       ?   +---php-code-coverage
?       ?   ?   +---src
?       ?   ?       +---Data
?       ?   ?       +---Driver
?       ?   ?       +---Exception
?       ?   ?       +---Node
?       ?   ?       +---Report
?       ?   ?       ?   +---Html
?       ?   ?       ?   ?   +---Renderer
?       ?   ?       ?   ?       +---Template
?       ?   ?       ?   ?           +---css
?       ?   ?       ?   ?           +---icons
?       ?   ?       ?   ?           +---js
?       ?   ?       ?   +---Xml
?       ?   ?       +---StaticAnalysis
?       ?   ?       +---TestSize
?       ?   ?       +---TestStatus
?       ?   ?       +---Util
?       ?   +---php-file-iterator
?       ?   ?   +---src
?       ?   +---php-invoker
?       ?   ?   +---src
?       ?   ?       +---exceptions
?       ?   +---php-text-template
?       ?   ?   +---.psalm
?       ?   ?   +---src
?       ?   ?       +---exceptions
?       ?   +---php-timer
?       ?   ?   +---src
?       ?   ?       +---exceptions
?       ?   +---phpunit
?       ?       +---schema
?       ?       +---src
?       ?           +---Event
?       ?           ?   +---Dispatcher
?       ?           ?   +---Emitter
?       ?           ?   +---Events
?       ?           ?   ?   +---Application
?       ?           ?   ?   +---Test
?       ?           ?   ?   ?   +---HookMethod
?       ?           ?   ?   ?   +---Issue
?       ?           ?   ?   ?   +---Lifecycle
?       ?           ?   ?   ?   +---Outcome
?       ?           ?   ?   ?   +---TestDouble
?       ?           ?   ?   +---TestRunner
?       ?           ?   ?   +---TestSuite
?       ?           ?   +---Exception
?       ?           ?   +---Value
?       ?           ?       +---Runtime
?       ?           ?       +---Telemetry
?       ?           ?       +---Test
?       ?           ?       ?   +---Issue
?       ?           ?       ?   +---TestData
?       ?           ?       +---TestSuite
?       ?           +---Framework
?       ?           ?   +---Assert
?       ?           ?   +---Attributes
?       ?           ?   +---Constraint
?       ?           ?   ?   +---Boolean
?       ?           ?   ?   +---Cardinality
?       ?           ?   ?   +---Equality
?       ?           ?   ?   +---Exception
?       ?           ?   ?   +---Filesystem
?       ?           ?   ?   +---Math
?       ?           ?   ?   +---Object
?       ?           ?   ?   +---Operator
?       ?           ?   ?   +---String
?       ?           ?   ?   +---Traversable
?       ?           ?   ?   +---Type
?       ?           ?   +---Exception
?       ?           ?   ?   +---Incomplete
?       ?           ?   ?   +---ObjectEquals
?       ?           ?   ?   +---Skipped
?       ?           ?   +---MockObject
?       ?           ?   ?   +---Exception
?       ?           ?   ?   +---Generator
?       ?           ?   ?   ?   +---Exception
?       ?           ?   ?   ?   +---templates
?       ?           ?   ?   +---Runtime
?       ?           ?   ?       +---Api
?       ?           ?   ?       +---Builder
?       ?           ?   ?       +---Interface
?       ?           ?   ?       +---PropertyHook
?       ?           ?   ?       +---Rule
?       ?           ?   ?       +---Stub
?       ?           ?   +---TestRunner
?       ?           ?   ?   +---templates
?       ?           ?   +---TestSize
?       ?           ?   +---TestStatus
?       ?           +---Logging
?       ?           ?   +---JUnit
?       ?           ?   ?   +---Subscriber
?       ?           ?   +---TeamCity
?       ?           ?   ?   +---Subscriber
?       ?           ?   +---TestDox
?       ?           ?       +---TestResult
?       ?           ?           +---Subscriber
?       ?           +---Metadata
?       ?           ?   +---Api
?       ?           ?   +---Exception
?       ?           ?   +---Parser
?       ?           ?   ?   +---Annotation
?       ?           ?   +---Version
?       ?           +---Runner
?       ?           ?   +---Baseline
?       ?           ?   ?   +---Exception
?       ?           ?   ?   +---Subscriber
?       ?           ?   +---DeprecationCollector
?       ?           ?   ?   +---Subscriber
?       ?           ?   +---Exception
?       ?           ?   +---Extension
?       ?           ?   +---Filter
?       ?           ?   +---GarbageCollection
?       ?           ?   ?   +---Subscriber
?       ?           ?   +---HookMethod
?       ?           ?   +---PHPT
?       ?           ?   ?   +---templates
?       ?           ?   +---ResultCache
?       ?           ?   ?   +---Subscriber
?       ?           ?   +---TestResult
?       ?           ?       +---Subscriber
?       ?           +---TextUI
?       ?           ?   +---Command
?       ?           ?   ?   +---Commands
?       ?           ?   +---Configuration
?       ?           ?   ?   +---Cli
?       ?           ?   ?   +---Exception
?       ?           ?   ?   +---Value
?       ?           ?   ?   +---Xml
?       ?           ?   ?       +---CodeCoverage
?       ?           ?   ?       ?   +---Report
?       ?           ?   ?       +---Logging
?       ?           ?   ?       ?   +---TestDox
?       ?           ?   ?       +---Migration
?       ?           ?   ?       ?   +---Migrations
?       ?           ?   ?       +---SchemaDetector
?       ?           ?   ?       +---Validator
?       ?           ?   +---Exception
?       ?           ?   +---Output
?       ?           ?       +---Default
?       ?           ?       ?   +---ProgressPrinter
?       ?           ?       ?       +---Subscriber
?       ?           ?       +---Printer
?       ?           ?       +---TestDox
?       ?           +---Util
?       ?               +---Exception
?       ?               +---Http
?       ?               +---PHP
?       ?               +---Xml
?       +---psr
?       ?   +---clock
?       ?   ?   +---src
?       ?   +---container
?       ?   ?   +---src
?       ?   +---event-dispatcher
?       ?   ?   +---src
?       ?   +---http-client
?       ?   ?   +---src
?       ?   +---http-factory
?       ?   ?   +---src
?       ?   +---http-message
?       ?   ?   +---docs
?       ?   ?   +---src
?       ?   +---log
?       ?   ?   +---src
?       ?   +---simple-cache
?       ?       +---src
?       +---psy
?       ?   +---psysh
?       ?       +---bin
?       ?       +---src
?       ?           +---CodeCleaner
?       ?           +---Command
?       ?           ?   +---ListCommand
?       ?           ?   +---TimeitCommand
?       ?           +---Exception
?       ?           +---ExecutionLoop
?       ?           +---Formatter
?       ?           +---Input
?       ?           +---Output
?       ?           +---Readline
?       ?           ?   +---Hoa
?       ?           ?       +---Terminfo
?       ?           ?           +---77
?       ?           ?           +---78
?       ?           +---Reflection
?       ?           +---Sudo
?       ?           +---TabCompletion
?       ?           ?   +---AutoloadWarmer
?       ?           ?   +---Matcher
?       ?           +---Util
?       ?           +---VarDumper
?       ?           +---VersionUpdater
?       ?               +---Downloader
?       +---ralouphie
?       ?   +---getallheaders
?       ?       +---src
?       +---ramsey
?       ?   +---collection
?       ?   ?   +---src
?       ?   ?       +---Exception
?       ?   ?       +---Map
?       ?   ?       +---Tool
?       ?   +---uuid
?       ?       +---src
?       ?           +---Builder
?       ?           +---Codec
?       ?           +---Converter
?       ?           ?   +---Number
?       ?           ?   +---Time
?       ?           +---Exception
?       ?           +---Fields
?       ?           +---Generator
?       ?           +---Guid
?       ?           +---Lazy
?       ?           +---Math
?       ?           +---Nonstandard
?       ?           +---Provider
?       ?           ?   +---Dce
?       ?           ?   +---Node
?       ?           ?   +---Time
?       ?           +---Rfc4122
?       ?           +---Type
?       ?           +---Validator
?       +---sebastian
?       ?   +---cli-parser
?       ?   ?   +---src
?       ?   ?       +---exceptions
?       ?   +---code-unit
?       ?   ?   +---src
?       ?   ?       +---exceptions
?       ?   +---code-unit-reverse-lookup
?       ?   ?   +---src
?       ?   +---comparator
?       ?   ?   +---src
?       ?   ?       +---exceptions
?       ?   +---complexity
?       ?   ?   +---src
?       ?   ?       +---Complexity
?       ?   ?       +---Exception
?       ?   ?       +---Visitor
?       ?   +---diff
?       ?   ?   +---src
?       ?   ?       +---Exception
?       ?   ?       +---Output
?       ?   +---environment
?       ?   ?   +---src
?       ?   +---exporter
?       ?   ?   +---src
?       ?   +---global-state
?       ?   ?   +---src
?       ?   ?       +---exceptions
?       ?   +---lines-of-code
?       ?   ?   +---src
?       ?   ?       +---Exception
?       ?   +---object-enumerator
?       ?   ?   +---src
?       ?   +---object-reflector
?       ?   ?   +---src
?       ?   +---recursion-context
?       ?   ?   +---src
?       ?   +---type
?       ?   ?   +---src
?       ?   ?       +---exception
?       ?   ?       +---type
?       ?   +---version
?       ?       +---src
?       +---staabm
?       ?   +---side-effects-detector
?       ?       +---lib
?       +---symfony
?       ?   +---clock
?       ?   ?   +---Resources
?       ?   ?   +---Test
?       ?   +---console
?       ?   ?   +---Attribute
?       ?   ?   +---CI
?       ?   ?   +---Command
?       ?   ?   +---CommandLoader
?       ?   ?   +---Completion
?       ?   ?   ?   +---Output
?       ?   ?   +---DataCollector
?       ?   ?   +---Debug
?       ?   ?   +---DependencyInjection
?       ?   ?   +---Descriptor
?       ?   ?   +---Event
?       ?   ?   +---EventListener
?       ?   ?   +---Exception
?       ?   ?   +---Formatter
?       ?   ?   +---Helper
?       ?   ?   +---Input
?       ?   ?   +---Logger
?       ?   ?   +---Messenger
?       ?   ?   +---Output
?       ?   ?   +---Question
?       ?   ?   +---Resources
?       ?   ?   ?   +---bin
?       ?   ?   +---SignalRegistry
?       ?   ?   +---Style
?       ?   ?   +---Tester
?       ?   ?       +---Constraint
?       ?   +---css-selector
?       ?   ?   +---Exception
?       ?   ?   +---Node
?       ?   ?   +---Parser
?       ?   ?   ?   +---Handler
?       ?   ?   ?   +---Shortcut
?       ?   ?   ?   +---Tokenizer
?       ?   ?   +---XPath
?       ?   ?       +---Extension
?       ?   +---deprecation-contracts
?       ?   +---error-handler
?       ?   ?   +---Command
?       ?   ?   +---Error
?       ?   ?   +---ErrorEnhancer
?       ?   ?   +---ErrorRenderer
?       ?   ?   +---Exception
?       ?   ?   +---Internal
?       ?   ?   +---Resources
?       ?   ?       +---assets
?       ?   ?       ?   +---css
?       ?   ?       ?   +---images
?       ?   ?       ?   +---js
?       ?   ?       +---bin
?       ?   ?       +---views
?       ?   +---event-dispatcher
?       ?   ?   +---Attribute
?       ?   ?   +---Debug
?       ?   ?   +---DependencyInjection
?       ?   +---event-dispatcher-contracts
?       ?   +---finder
?       ?   ?   +---Comparator
?       ?   ?   +---Exception
?       ?   ?   +---Iterator
?       ?   +---http-foundation
?       ?   ?   +---Exception
?       ?   ?   +---File
?       ?   ?   ?   +---Exception
?       ?   ?   +---RateLimiter
?       ?   ?   +---RequestMatcher
?       ?   ?   +---Session
?       ?   ?   ?   +---Attribute
?       ?   ?   ?   +---Flash
?       ?   ?   ?   +---Storage
?       ?   ?   ?       +---Handler
?       ?   ?   ?       +---Proxy
?       ?   ?   +---Test
?       ?   ?       +---Constraint
?       ?   +---http-kernel
?       ?   ?   +---Attribute
?       ?   ?   +---Bundle
?       ?   ?   +---CacheClearer
?       ?   ?   +---CacheWarmer
?       ?   ?   +---Config
?       ?   ?   +---Controller
?       ?   ?   ?   +---ArgumentResolver
?       ?   ?   +---ControllerMetadata
?       ?   ?   +---DataCollector
?       ?   ?   +---Debug
?       ?   ?   +---DependencyInjection
?       ?   ?   +---Event
?       ?   ?   +---EventListener
?       ?   ?   +---Exception
?       ?   ?   +---Fragment
?       ?   ?   +---HttpCache
?       ?   ?   +---Log
?       ?   ?   +---Profiler
?       ?   ?   +---Resources
?       ?   +---mailer
?       ?   ?   +---Command
?       ?   ?   +---DataCollector
?       ?   ?   +---Event
?       ?   ?   +---EventListener
?       ?   ?   +---Exception
?       ?   ?   +---Header
?       ?   ?   +---Messenger
?       ?   ?   +---Test
?       ?   ?   ?   +---Constraint
?       ?   ?   +---Transport
?       ?   ?       +---Smtp
?       ?   ?           +---Auth
?       ?   ?           +---Stream
?       ?   +---mime
?       ?   ?   +---Crypto
?       ?   ?   +---DependencyInjection
?       ?   ?   +---Encoder
?       ?   ?   +---Exception
?       ?   ?   +---Header
?       ?   ?   +---HtmlToTextConverter
?       ?   ?   +---Part
?       ?   ?   ?   +---Multipart
?       ?   ?   +---Resources
?       ?   ?   ?   +---bin
?       ?   ?   +---Test
?       ?   ?       +---Constraint
?       ?   +---polyfill-ctype
?       ?   +---polyfill-intl-grapheme
?       ?   +---polyfill-intl-idn
?       ?   ?   +---Resources
?       ?   ?       +---unidata
?       ?   +---polyfill-intl-normalizer
?       ?   ?   +---Resources
?       ?   ?       +---stubs
?       ?   ?       +---unidata
?       ?   +---polyfill-mbstring
?       ?   ?   +---Resources
?       ?   ?       +---unidata
?       ?   +---polyfill-php80
?       ?   ?   +---Resources
?       ?   ?       +---stubs
?       ?   +---polyfill-php83
?       ?   ?   +---Resources
?       ?   ?       +---stubs
?       ?   +---polyfill-php84
?       ?   ?   +---Resources
?       ?   ?       +---stubs
?       ?   +---polyfill-php85
?       ?   ?   +---Resources
?       ?   ?       +---stubs
?       ?   +---polyfill-uuid
?       ?   +---process
?       ?   ?   +---Exception
?       ?   ?   +---Messenger
?       ?   ?   +---Pipes
?       ?   +---routing
?       ?   ?   +---Annotation
?       ?   ?   +---Attribute
?       ?   ?   +---DependencyInjection
?       ?   ?   +---Exception
?       ?   ?   +---Generator
?       ?   ?   ?   +---Dumper
?       ?   ?   +---Loader
?       ?   ?   ?   +---Configurator
?       ?   ?   ?   ?   +---Traits
?       ?   ?   ?   +---schema
?       ?   ?   ?       +---routing
?       ?   ?   +---Matcher
?       ?   ?   ?   +---Dumper
?       ?   ?   +---Requirement
?       ?   +---service-contracts
?       ?   ?   +---Attribute
?       ?   ?   +---Test
?       ?   +---string
?       ?   ?   +---Exception
?       ?   ?   +---Inflector
?       ?   ?   +---Resources
?       ?   ?   ?   +---bin
?       ?   ?   ?   +---data
?       ?   ?   +---Slugger
?       ?   +---translation
?       ?   ?   +---Catalogue
?       ?   ?   +---Command
?       ?   ?   +---DataCollector
?       ?   ?   +---DependencyInjection
?       ?   ?   +---Dumper
?       ?   ?   +---Exception
?       ?   ?   +---Extractor
?       ?   ?   ?   +---Visitor
?       ?   ?   +---Formatter
?       ?   ?   +---Loader
?       ?   ?   +---Provider
?       ?   ?   +---Reader
?       ?   ?   +---Resources
?       ?   ?   ?   +---bin
?       ?   ?   ?   +---data
?       ?   ?   ?   +---schemas
?       ?   ?   +---Test
?       ?   ?   +---Util
?       ?   ?   +---Writer
?       ?   +---translation-contracts
?       ?   ?   +---Test
?       ?   +---uid
?       ?   ?   +---Command
?       ?   ?   +---Exception
?       ?   ?   +---Factory
?       ?   +---var-dumper
?       ?   ?   +---Caster
?       ?   ?   +---Cloner
?       ?   ?   +---Command
?       ?   ?   ?   +---Descriptor
?       ?   ?   +---Dumper
?       ?   ?   ?   +---ContextProvider
?       ?   ?   +---Exception
?       ?   ?   +---Resources
?       ?   ?   ?   +---bin
?       ?   ?   ?   +---css
?       ?   ?   ?   +---functions
?       ?   ?   ?   +---js
?       ?   ?   +---Server
?       ?   ?   +---Test
?       ?   +---yaml
?       ?       +---Command
?       ?       +---Exception
?       ?       +---Resources
?       ?       ?   +---bin
?       ?       +---Tag
?       +---ta-tikoma
?       ?   +---phpunit-architecture-test
?       ?       +---src
?       ?           +---Asserts
?       ?           ?   +---Dependencies
?       ?           ?   ?   +---Elements
?       ?           ?   +---Inheritance
?       ?           ?   +---Iterator
?       ?           ?   +---Methods
?       ?           ?   ?   +---Elements
?       ?           ?   +---Properties
?       ?           ?       +---Elements
?       ?           +---Builders
?       ?           +---Elements
?       ?           ?   +---Layer
?       ?           +---Enums
?       ?           +---Services
?       ?           +---Storage
?       +---theseer
?       ?   +---tokenizer
?       ?       +---src
?       +---tijsverkoyen
?       ?   +---css-to-inline-styles
?       ?       +---src
?       ?           +---Css
?       ?               +---Property
?       ?               +---Rule
?       +---vlucas
?       ?   +---phpdotenv
?       ?       +---src
?       ?           +---Exception
?       ?           +---Loader
?       ?           +---Parser
?       ?           +---Repository
?       ?           ?   +---Adapter
?       ?           +---Store
?       ?           ?   +---File
?       ?           +---Util
?       +---voku
?       ?   +---portable-ascii
?       ?       +---src
?       ?           +---voku
?       ?               +---helper
?       ?                   +---data
?       +---webmozart
?           +---assert
?               +---src
?               +---tools
?                   +---php-cs-fixer
?                   +---phpunit
?                   +---psalm
?                   +---roave-bc-check
+---Frontend-Hospital
    +---.vscode
    +---node_modules
    ?   +---.bin
    ?   +---.vite
    ?   ?   +---deps
    ?   +---.vite-temp
    ?   +---.vue-global-types
    ?   +---@babel
    ?   ?   +---code-frame
    ?   ?   ?   +---lib
    ?   ?   +---compat-data
    ?   ?   ?   +---data
    ?   ?   +---core
    ?   ?   ?   +---lib
    ?   ?   ?   ?   +---config
    ?   ?   ?   ?   ?   +---files
    ?   ?   ?   ?   ?   +---helpers
    ?   ?   ?   ?   ?   +---validation
    ?   ?   ?   ?   +---errors
    ?   ?   ?   ?   +---gensync-utils
    ?   ?   ?   ?   +---parser
    ?   ?   ?   ?   ?   +---util
    ?   ?   ?   ?   +---tools
    ?   ?   ?   ?   +---transformation
    ?   ?   ?   ?   ?   +---file
    ?   ?   ?   ?   ?   +---util
    ?   ?   ?   ?   +---vendor
    ?   ?   ?   +---src
    ?   ?   ?       +---config
    ?   ?   ?           +---files
    ?   ?   +---generator
    ?   ?   ?   +---lib
    ?   ?   ?       +---generators
    ?   ?   ?       +---node
    ?   ?   +---helper-annotate-as-pure
    ?   ?   ?   +---lib
    ?   ?   +---helper-compilation-targets
    ?   ?   ?   +---lib
    ?   ?   +---helper-create-class-features-plugin
    ?   ?   ?   +---lib
    ?   ?   +---helper-globals
    ?   ?   ?   +---data
    ?   ?   +---helper-member-expression-to-functions
    ?   ?   ?   +---lib
    ?   ?   +---helper-module-imports
    ?   ?   ?   +---lib
    ?   ?   +---helper-module-transforms
    ?   ?   ?   +---lib
    ?   ?   +---helper-optimise-call-expression
    ?   ?   ?   +---lib
    ?   ?   +---helper-plugin-utils
    ?   ?   ?   +---lib
    ?   ?   +---helper-replace-supers
    ?   ?   ?   +---lib
    ?   ?   +---helper-skip-transparent-expression-wrappers
    ?   ?   ?   +---lib
    ?   ?   +---helper-string-parser
    ?   ?   ?   +---lib
    ?   ?   +---helper-validator-identifier
    ?   ?   ?   +---lib
    ?   ?   +---helper-validator-option
    ?   ?   ?   +---lib
    ?   ?   +---helpers
    ?   ?   ?   +---lib
    ?   ?   ?       +---helpers
    ?   ?   +---parser
    ?   ?   ?   +---bin
    ?   ?   ?   +---lib
    ?   ?   ?   +---typings
    ?   ?   +---plugin-proposal-decorators
    ?   ?   ?   +---lib
    ?   ?   +---plugin-syntax-decorators
    ?   ?   ?   +---lib
    ?   ?   +---plugin-syntax-import-attributes
    ?   ?   ?   +---lib
    ?   ?   +---plugin-syntax-import-meta
    ?   ?   ?   +---lib
    ?   ?   +---plugin-syntax-jsx
    ?   ?   ?   +---lib
    ?   ?   +---plugin-syntax-typescript
    ?   ?   ?   +---lib
    ?   ?   +---plugin-transform-typescript
    ?   ?   ?   +---lib
    ?   ?   +---template
    ?   ?   ?   +---lib
    ?   ?   +---traverse
    ?   ?   ?   +---lib
    ?   ?   ?       +---path
    ?   ?   ?       ?   +---inference
    ?   ?   ?       ?   +---lib
    ?   ?   ?       +---scope
    ?   ?   ?           +---lib
    ?   ?   +---types
    ?   ?       +---lib
    ?   ?           +---asserts
    ?   ?           ?   +---generated
    ?   ?           +---ast-types
    ?   ?           ?   +---generated
    ?   ?           +---builders
    ?   ?           ?   +---flow
    ?   ?           ?   +---generated
    ?   ?           ?   +---react
    ?   ?           ?   +---typescript
    ?   ?           +---clone
    ?   ?           +---comments
    ?   ?           +---constants
    ?   ?           ?   +---generated
    ?   ?           +---converters
    ?   ?           +---definitions
    ?   ?           +---modifications
    ?   ?           ?   +---flow
    ?   ?           ?   +---typescript
    ?   ?           +---retrievers
    ?   ?           +---traverse
    ?   ?           +---utils
    ?   ?           ?   +---react
    ?   ?           +---validators
    ?   ?               +---generated
    ?   ?               +---react
    ?   +---@esbuild
    ?   ?   +---win32-x64
    ?   +---@isaacs
    ?   ?   +---fs-minipass
    ?   ?       +---dist
    ?   ?           +---commonjs
    ?   ?           +---esm
    ?   +---@jridgewell
    ?   ?   +---gen-mapping
    ?   ?   ?   +---dist
    ?   ?   ?   ?   +---types
    ?   ?   ?   +---src
    ?   ?   ?   +---types
    ?   ?   +---remapping
    ?   ?   ?   +---dist
    ?   ?   ?   +---src
    ?   ?   ?   +---types
    ?   ?   +---resolve-uri
    ?   ?   ?   +---dist
    ?   ?   ?       +---types
    ?   ?   +---sourcemap-codec
    ?   ?   ?   +---dist
    ?   ?   ?   +---src
    ?   ?   ?   +---types
    ?   ?   +---trace-mapping
    ?   ?       +---dist
    ?   ?       +---src
    ?   ?       +---types
    ?   +---@polka
    ?   ?   +---url
    ?   +---@rolldown
    ?   ?   +---pluginutils
    ?   ?       +---dist
    ?   +---@rollup
    ?   ?   +---rollup-win32-x64-gnu
    ?   ?   +---rollup-win32-x64-msvc
    ?   +---@sec-ant
    ?   ?   +---readable-stream
    ?   ?       +---dist
    ?   ?           +---core
    ?   ?           +---index
    ?   ?           +---polyfill
    ?   ?           +---ponyfill
    ?   ?           +---types
    ?   +---@sindresorhus
    ?   ?   +---merge-streams
    ?   +---@tailwindcss
    ?   ?   +---node
    ?   ?   ?   +---dist
    ?   ?   +---oxide
    ?   ?   ?   +---scripts
    ?   ?   +---oxide-win32-x64-msvc
    ?   ?   +---vite
    ?   ?       +---dist
    ?   +---@types
    ?   ?   +---estree
    ?   +---@vitejs
    ?   ?   +---plugin-vue
    ?   ?       +---dist
    ?   +---@vue
    ?   ?   +---babel-helper-vue-transform-on
    ?   ?   +---babel-plugin-jsx
    ?   ?   ?   +---dist
    ?   ?   +---babel-plugin-resolve-type
    ?   ?   ?   +---dist
    ?   ?   +---compiler-core
    ?   ?   ?   +---dist
    ?   ?   +---compiler-dom
    ?   ?   ?   +---dist
    ?   ?   +---compiler-sfc
    ?   ?   ?   +---dist
    ?   ?   +---compiler-ssr
    ?   ?   ?   +---dist
    ?   ?   +---devtools-core
    ?   ?   ?   +---dist
    ?   ?   ?   +---node_modules
    ?   ?   ?       +---.bin
    ?   ?   ?       +---nanoid
    ?   ?   ?           +---bin
    ?   ?   ?           +---non-secure
    ?   ?   ?           +---url-alphabet
    ?   ?   +---devtools-kit
    ?   ?   ?   +---dist
    ?   ?   +---devtools-shared
    ?   ?   ?   +---dist
    ?   ?   +---reactivity
    ?   ?   ?   +---dist
    ?   ?   +---runtime-core
    ?   ?   ?   +---dist
    ?   ?   +---runtime-dom
    ?   ?   ?   +---dist
    ?   ?   +---server-renderer
    ?   ?   ?   +---dist
    ?   ?   +---shared
    ?   ?       +---dist
    ?   +---ansis
    ?   +---asynckit
    ?   ?   +---lib
    ?   +---axios
    ?   ?   +---dist
    ?   ?   ?   +---browser
    ?   ?   ?   +---esm
    ?   ?   ?   +---node
    ?   ?   +---lib
    ?   ?       +---adapters
    ?   ?       +---cancel
    ?   ?       +---core
    ?   ?       +---defaults
    ?   ?       +---env
    ?   ?       ?   +---classes
    ?   ?       +---helpers
    ?   ?       +---platform
    ?   ?           +---browser
    ?   ?           ?   +---classes
    ?   ?           +---common
    ?   ?           +---node
    ?   ?               +---classes
    ?   +---baseline-browser-mapping
    ?   ?   +---dist
    ?   +---birpc
    ?   ?   +---dist
    ?   +---browserslist
    ?   +---bundle-name
    ?   +---call-bind-apply-helpers
    ?   ?   +---.github
    ?   ?   +---test
    ?   +---caniuse-lite
    ?   ?   +---data
    ?   ?   ?   +---features
    ?   ?   ?   +---regions
    ?   ?   +---dist
    ?   ?       +---lib
    ?   ?       +---unpacker
    ?   +---chownr
    ?   ?   +---dist
    ?   ?       +---commonjs
    ?   ?       +---esm
    ?   +---combined-stream
    ?   ?   +---lib
    ?   +---convert-source-map
    ?   +---copy-anything
    ?   ?   +---dist
    ?   ?       +---cjs
    ?   +---cross-spawn
    ?   ?   +---lib
    ?   ?       +---util
    ?   +---csstype
    ?   +---debug
    ?   ?   +---src
    ?   +---default-browser
    ?   +---default-browser-id
    ?   +---define-lazy-prop
    ?   +---delayed-stream
    ?   ?   +---lib
    ?   +---detect-libc
    ?   ?   +---lib
    ?   +---dunder-proto
    ?   ?   +---.github
    ?   ?   +---test
    ?   +---electron-to-chromium
    ?   +---enhanced-resolve
    ?   ?   +---lib
    ?   ?       +---util
    ?   +---entities
    ?   ?   +---lib
    ?   ?       +---esm
    ?   ?       ?   +---generated
    ?   ?       +---generated
    ?   +---error-stack-parser-es
    ?   ?   +---dist
    ?   +---es-define-property
    ?   ?   +---.github
    ?   ?   +---test
    ?   +---es-errors
    ?   ?   +---.github
    ?   ?   +---test
    ?   +---es-object-atoms
    ?   ?   +---.github
    ?   ?   +---test
    ?   +---es-set-tostringtag
    ?   ?   +---test
    ?   +---esbuild
    ?   ?   +---bin
    ?   ?   +---lib
    ?   +---escalade
    ?   ?   +---dist
    ?   ?   +---sync
    ?   +---estree-walker
    ?   ?   +---dist
    ?   ?   ?   +---esm
    ?   ?   ?   +---umd
    ?   ?   +---src
    ?   ?   +---types
    ?   +---execa
    ?   ?   +---lib
    ?   ?   ?   +---arguments
    ?   ?   ?   +---convert
    ?   ?   ?   +---io
    ?   ?   ?   +---ipc
    ?   ?   ?   +---methods
    ?   ?   ?   +---pipe
    ?   ?   ?   +---resolve
    ?   ?   ?   +---return
    ?   ?   ?   +---stdio
    ?   ?   ?   +---terminate
    ?   ?   ?   +---transform
    ?   ?   ?   +---utils
    ?   ?   ?   +---verbose
    ?   ?   +---types
    ?   ?       +---arguments
    ?   ?       +---methods
    ?   ?       +---return
    ?   ?       +---stdio
    ?   ?       +---subprocess
    ?   ?       +---transform
    ?   +---fdir
    ?   ?   +---dist
    ?   +---figures
    ?   +---follow-redirects
    ?   +---form-data
    ?   ?   +---lib
    ?   +---function-bind
    ?   ?   +---.github
    ?   ?   +---test
    ?   +---gensync
    ?   ?   +---test
    ?   +---get-intrinsic
    ?   ?   +---.github
    ?   ?   +---test
    ?   +---get-proto
    ?   ?   +---.github
    ?   ?   +---test
    ?   +---get-stream
    ?   ?   +---source
    ?   +---gopd
    ?   ?   +---.github
    ?   ?   +---test
    ?   +---graceful-fs
    ?   +---has-symbols
    ?   ?   +---.github
    ?   ?   +---test
    ?   ?       +---shams
    ?   +---has-tostringtag
    ?   ?   +---.github
    ?   ?   +---test
    ?   ?       +---shams
    ?   +---hasown
    ?   ?   +---.github
    ?   +---hookable
    ?   ?   +---dist
    ?   +---human-signals
    ?   ?   +---build
    ?   ?       +---src
    ?   +---is-docker
    ?   +---is-inside-container
    ?   +---is-plain-obj
    ?   +---is-stream
    ?   +---is-unicode-supported
    ?   +---is-what
    ?   ?   +---dist
    ?   ?       +---cjs
    ?   +---is-wsl
    ?   +---isexe
    ?   ?   +---test
    ?   +---jiti
    ?   ?   +---dist
    ?   ?   +---lib
    ?   +---js-tokens
    ?   +---jsesc
    ?   ?   +---bin
    ?   ?   +---man
    ?   +---json5
    ?   ?   +---dist
    ?   ?   +---lib
    ?   +---kolorist
    ?   ?   +---dist
    ?   ?       +---cjs
    ?   ?       +---esm
    ?   ?       +---module
    ?   ?       +---types
    ?   +---lightningcss
    ?   ?   +---node
    ?   +---lightningcss-win32-x64-msvc
    ?   +---lru-cache
    ?   +---magic-string
    ?   ?   +---dist
    ?   +---math-intrinsics
    ?   ?   +---.github
    ?   ?   +---constants
    ?   ?   +---test
    ?   +---mime-db
    ?   +---mime-types
    ?   +---minipass
    ?   ?   +---dist
    ?   ?       +---commonjs
    ?   ?       +---esm
    ?   +---minizlib
    ?   ?   +---dist
    ?   ?       +---commonjs
    ?   ?       +---esm
    ?   +---mitt
    ?   ?   +---dist
    ?   +---mrmime
    ?   +---ms
    ?   +---nanoid
    ?   ?   +---async
    ?   ?   +---bin
    ?   ?   +---non-secure
    ?   ?   +---url-alphabet
    ?   +---node-releases
    ?   ?   +---data
    ?   ?       +---processed
    ?   ?       +---release-schedule
    ?   +---npm-run-path
    ?   ?   +---node_modules
    ?   ?       +---path-key
    ?   +---ohash
    ?   ?   +---dist
    ?   ?       +---crypto
    ?   ?       ?   +---js
    ?   ?       ?   +---node
    ?   ?       +---shared
    ?   ?       +---utils
    ?   +---open
    ?   +---parse-ms
    ?   +---path-key
    ?   +---pathe
    ?   ?   +---dist
    ?   ?       +---shared
    ?   +---perfect-debounce
    ?   ?   +---dist
    ?   +---picocolors
    ?   +---picomatch
    ?   ?   +---lib
    ?   +---postcss
    ?   ?   +---lib
    ?   +---pretty-ms
    ?   +---proxy-from-env
    ?   +---rfdc
    ?   ?   +---.github
    ?   ?   ?   +---workflows
    ?   ?   +---test
    ?   +---rollup
    ?   ?   +---dist
    ?   ?       +---bin
    ?   ?       +---es
    ?   ?       ?   +---shared
    ?   ?       +---shared
    ?   +---run-applescript
    ?   +---semver
    ?   ?   +---bin
    ?   +---shebang-command
    ?   +---shebang-regex
    ?   +---signal-exit
    ?   ?   +---dist
    ?   ?       +---cjs
    ?   ?       +---mjs
    ?   +---sirv
    ?   +---source-map-js
    ?   ?   +---lib
    ?   +---speakingurl
    ?   ?   +---examples
    ?   ?   +---lib
    ?   ?   +---test
    ?   ?   +---typings
    ?   ?       +---speakingurl
    ?   +---strip-final-newline
    ?   +---superjson
    ?   ?   +---dist
    ?   +---tailwindcss
    ?   ?   +---dist
    ?   +---tapable
    ?   ?   +---lib
    ?   +---tar
    ?   ?   +---dist
    ?   ?   ?   +---commonjs
    ?   ?   ?   +---esm
    ?   ?   +---node_modules
    ?   ?       +---yallist
    ?   ?           +---dist
    ?   ?               +---commonjs
    ?   ?               +---esm
    ?   +---tinyglobby
    ?   ?   +---dist
    ?   +---totalist
    ?   ?   +---dist
    ?   ?   +---sync
    ?   +---unicorn-magic
    ?   +---unplugin-utils
    ?   ?   +---dist
    ?   +---update-browserslist-db
    ?   +---vite
    ?   ?   +---bin
    ?   ?   +---dist
    ?   ?   ?   +---client
    ?   ?   ?   +---node
    ?   ?   ?       +---chunks
    ?   ?   +---misc
    ?   ?   +---types
    ?   ?       +---internal
    ?   +---vite-dev-rpc
    ?   ?   +---dist
    ?   +---vite-hot-client
    ?   ?   +---dist
    ?   +---vite-plugin-inspect
    ?   ?   +---dist
    ?   ?       +---client
    ?   ?       ?   +---assets
    ?   ?       ?       +---fonts
    ?   ?       +---shared
    ?   +---vite-plugin-vue-devtools
    ?   ?   +---client
    ?   ?   ?   +---assets
    ?   ?   +---dist
    ?   ?   +---src
    ?   ?       +---overlay
    ?   +---vite-plugin-vue-inspector
    ?   ?   +---dist
    ?   ?   +---src
    ?   +---vue
    ?   ?   +---compiler-sfc
    ?   ?   +---dist
    ?   ?   +---jsx-runtime
    ?   ?   +---server-renderer
    ?   +---which
    ?   ?   +---bin
    ?   +---wsl-utils
    ?   +---yallist
    ?   +---yoctocolors
    +---public
    ?   +---images
    +---src
        +---assets
        +---components
        +---services
        +---store
```

## 🚀 Installation & Setup

1. Clone the repository

   ```bash
   git clone https://github.com/kimhongkevin/Hospital_Management_System.git
   cd Hospital_Management_System
   ```
2. Setup the backend

   ```bash
   cd Backend-Hospital
   # install dependencies, setup .env, migrate database, seed data
   ```
3. Setup the frontend

   ```bash
   cd ../Frontend-Hospital
   # install npm packages, run dev server
   ```
4. Open the application in your browser (e.g., `http://localhost:8080` or whatever your setup uses).

> **Note:** Provide instructions for setting `.env` variables (database, port, credentials), how to run migrations, and any initial user credentials.

## 🧪 Running Tests

*If you have tests, describe how to run them. If not, you can remove this section or mark as future work.*

```bash
# example
cd Backend-Hospital
php artisan test
```

## 📷 Screenshots

> Add some screenshots of the UI/UX to help viewers see the interface.
> *(Insert images like login screen, dashboard, appointment page, etc.)*

## ✅ Usage

Once installed:

* Login as admin and create user accounts for doctors, nurses, receptionists.
* Register new patients, book appointments, monitor ward statuses.
* Generate reports via the dashboard.
* Logout securely.

## 🚧 Current Status & Roadmap

**Current status:** Basic features implemented, Code is functional for course requirements.
**Next steps:**

* Add role-based access control for more fine-grained permissions
* Improve UI/UX (mobile responsiveness, better visual design)
* Add API endpoints for mobile app integration
* Add automated tests & CI/CD workflow
* Deploy to cloud (AWS / Heroku / DigitalOcean)

## 👥 Author & Contributors

* **Author:** [Your Name] — [Your Email]
* **Contributors:** [If you worked in a team, list names here]

## 📄 License

Specify a license (MIT, Apache, etc.), or state “All rights reserved” if you want to keep it closed.


[1]: https://github.com/kimhongkevin/Hospital_Management_System.git "GitHub - kimhongkevin/Hospital_Management_System: System Design and analysis course-project"
