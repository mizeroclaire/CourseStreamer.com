 require 'json'
 require 'sinatra'
 set :public_folder, Proc.new { File.join(root, "public") }
 set server: 'thin'