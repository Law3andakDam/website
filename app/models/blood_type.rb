class BloodType < ApplicationRecord
  validates :name, presence: true
  has_many :doners
  has_many :cases
end
