<x-app-layout>
   <x-slot name="header">
       <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Halaman Tambah User') }}
       </h2>
   </x-slot>
   <div class="py-8">
        
       <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
               <div class="p-6 bg-white border-b border-gray-200">
                  
               <form method="POST" action="{{ route('user.store') }}">
                   @csrf
                   <!-- Name -->
                   <div>
                       <x-input-label for="name" :value="__('Name')" />
                       <x-text-input id="name" class="block mt-1 w-full"
type="text" name="name" :value="old('name')" required autofocus />
                       <x-input-error :messages="$errors->get('name')"
class="mt-2" />
                   </div>
                   <!-- username -->
                   <div>
                       <x-input-label for="username" :value="__('Username')"
/>
                       <x-text-input id="username" class="block mt-1 w-full"
type="text" name="username" :value="old('username')" required autofocus />
                       <x-input-error :messages="$errors->get('username')"
class="mt-2" />
                   </div>
                   <!-- hp -->
                   <div>
                       <x-input-label for="hp" :value="__('No HP')" />
                       <x-text-input id="hp" class="block mt-1 w-full"
type="text" name="hp" :value="old('hp')" required autofocus />
                       <x-input-error :messages="$errors->get('hp')"
class="mt-2" />
                   </div>
                   <!-- Email Address -->
                   <div class="mt-4">
                       <x-input-label for="email" :value="__('Email')" />
                       <x-text-input id="email" class="block mt-1 w-full"
type="email" name="email" :value="old('email')" required />
                       <x-input-error :messages="$errors->get('email')"
class="mt-2" />
</div>
                   <!-- Password -->
                   <div class="mt-4">
                       <x-input-label for="password" :value="__('Password')"
/>
                       <x-text-input id="password" class="block mt-1 w-full"
                                       type="password"
                                       name="password"
                                       required autocomplete="new-password"
/>
                       <x-input-error :messages="$errors->get('password')"
class="mt-2" />
                   </div>
                   <div class="mt-4">
                       <x-input-label for="role" :value="__('Role')" />
                       <select class=" block mt-1 w-full rounded-md shadow-sm
border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
focus:ring-opacity-50'" name="role">
                           <option value="admin">Admin</option>
                           <option value="staff">Staff</option>
                           <option value="customer">Customer</option>
                       </select>
                       <x-input-error :messages="$errors->get('role')"
class="mt-2" />
                   </div>
                   <div class="flex items-center justify-end mt-4">
                       <x-primary-button class="ml-4">
                           {{ __('Tambah Data') }}
                       </x-primary-button>
                   </div>
               </form>
               </div>
           </div>
       </div>
   </div>
</x-app-layout>
