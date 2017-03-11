Rails.application.routes.draw do
  root 'pages#index'
  get 'pages/about'
  get 'pages/contact'

  devise_for :users
  mount RailsAdmin::Engine => '/admin', as: 'rails_admin'
end
